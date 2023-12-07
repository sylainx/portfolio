<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use App\Models\ContactInformation;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\SendContactFormRequest;

class ContactController extends Controller {
    /**
     * Display a listing of the resource.
     */
    public function index() {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function submitContactForm(SendContactFormRequest $request) {
        // dd($request->all());

        $request->validated();

        try {

            $contact = new ContactInformation();
            $contact->name = $request->name;
            $contact->email = $request->email;
            $contact->subject = $request->subject;
            $contact->message = $request->message;

            // Logique d'envoi d'email
            $contact->save();

            Mail::to($request->email)
                ->send(new ContactMail($request->name, $request->email, $request->subject, $request->message));

        } catch (\Exception $e) {
            // Gestion des erreurs d'envoi d'email
            // Vous pouvez enregistrer les erreurs dans les logs ou prendre d'autres mesures appropriées
            \Log::error('Erreur lors de l\'envoi de l\'email: '.$e->getMessage());
        }

        return redirect()->route('home')
            ->with('success', 'Your message has been sent successfully!');
    }
}
