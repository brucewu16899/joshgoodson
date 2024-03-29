<?php

namespace JoshGoodson\Http\Controllers;

use JoshGoodson\User;
use Carbon\Carbon;
use Cmgmyr\Messenger\Models\Thread;
use Cmgmyr\Messenger\Models\Message;
use Cmgmyr\Messenger\Models\Participant;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use Redirect;

class MessagesController extends Controller
{
  /**
   * Create a new controller instance.
   *
   * @return void
   */
   public function __construct()
   {
       //
   }

   /**
    * Show all of the message threads to the user
    *
    * @return mixed
    */
   public function index()
   {
     $title = 'My Inbox';
     $icon = 'envelope';
     $currentUserId = Auth::user()->id;
     // All threads, ignore deleted/archived participants
     $threads = Thread::getAllLatest()->get();
     // All threads that user is participating in
     // $threads = Thread::forUser($currentUserId)->latest('updated_at')->get();
     // All threads that user is participating in, with new messages
     // $threads = Thread::forUserWithNewMessages($currentUserId)->latest('updated_at')->get();
     return view('messages.index', compact('threads', 'currentUserId', 'title', 'icon'));
   }

   /**
    * Shows a message thread
    *
    * @param $id
    * @return mixed
    */
   public function show($id)
   {
     try {
         $thread = Thread::findOrFail($id);
     } catch (ModelNotFoundException $e) {
         Session::flash('error_message', 'The thread with ID: ' . $id . ' was not found.');
         return redirect('messages');
     }
     $title = $thread->subject;
     $icon = 'envelope';
     // show current user in list if not a current participant
     // $users = User::whereNotIn('id', $thread->participantsUserIds())->get();
     // don't show the current user in list
     $userId = Auth::user()->id;
     $users = User::whereNotIn('id', $thread->participantsUserIds($userId))->get();
     $thread->markAsRead($userId);
     return view('messages.show', compact('thread', 'users', 'title', 'icon'));
   }

   /**
    * Creates a new message thread
    *
    * @return mixed
    */
   public function create()
   {
     $title = 'Create New Message';
     $icon = 'envelope';
     $users = User::where('id', '!=', Auth::id())->get();
     return view('messages.create', compact('users', 'title', 'icon'));
   }

   /**
    * Stores a new message thread
    *
    * @return mixed
    */
   public function store()
   {
     $input = Input::all();
     $thread = Thread::create(
         [
             'subject' => $input['subject'],
         ]
     );
     // Message
     Message::create(
         [
             'thread_id' => $thread->id,
             'user_id'   => Auth::user()->id,
             'body'      => $input['message'],
         ]
     );
     // Sender
     Participant::create(
         [
             'thread_id' => $thread->id,
             'user_id'   => Auth::user()->id,
             'last_read' => new Carbon
         ]
     );
     // Recipients
     if (Input::has('recipients')) {
         $thread->addParticipants($input['recipients']);
     }
     return redirect('messages');
   }

   /**
    * Adds a new message to a current thread
    *
    * @param $id
    * @return mixed
    */
   public function update($id)
   {
     try {
         $thread = Thread::findOrFail($id);
     } catch (ModelNotFoundException $e) {
         Session::flash('error_message', 'The thread with ID: ' . $id . ' was not found.');
         return redirect('messages');
     }
     $thread->activateAllParticipants();
     // Message
     Message::create(
         [
             'thread_id' => $thread->id,
             'user_id'   => Auth::id(),
             'body'      => Input::get('message'),
         ]
     );
     // Add replier as a participant
     $participant = Participant::firstOrCreate(
         [
             'thread_id' => $thread->id,
             'user_id'   => Auth::user()->id
         ]
     );
     $participant->last_read = new Carbon;
     $participant->save();
     // Recipients
     if (Input::has('recipients')) {
         $thread->addParticipants(Input::get('recipients'));
     }
     return Redirect::route('messages.show', $id);
   }
}
