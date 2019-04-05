<?php

namespace App\Controller;

use App\Entity\Contact;
use App\Form\ContactType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class ContactController extends AbstractController
{
    /**
     * @Route("/contact", name="contact")
     */
    public function contact(Request $request, \Swift_Mailer $mailer)
    {
        $contact = new Contact();

        $form = $this->createForm(ContactType::class, $contact);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $message = (new \Swift_Message('[Site] Contact'))
                ->setFrom('admin@site.com')
                ->setTo('matthieumota@gmail.com')
                ->setBody('Nom : ' . $contact->getName());

            $mailer->send($message);
            dump($form->getData());
            dump($contact);
            dump($contact ===$form->getData());
            $this->addFlash('success', 'Message Envoyé');
            return $this->redirectToRoute('homepage');
        }

        return $this->render('contact/contact.html.twig', [
            'form' => $form->createView()
        ]);

    }
}
