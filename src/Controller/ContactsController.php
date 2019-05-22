<?php
namespace App\Controller;

use Cake\Event\Event;
use Cake\Mailer\Email;



class ContactsController extends AppController
{
    public function initialize()
    {
        parent::initialize();
        $this->loadComponent('Captcha');
    }
    public function contato(){
        $this->viewBuilder()->setLayout('site');

        if ($this->request->is('post') && $this->Captcha->captchaIsValid()){
            $formData = $this->request->getData();

            $email = new Email('default');
            $email->setFrom(['consultenos@email.com' => 'Consultenos'])
                ->setTo('consultenos@email.com')
                ->setSubject('Contato do site')
                ->send('Email de contato de: '.$formData['email'].' com a seguinte mensagem: '.$formData['msg']);

        }


        $this->loadPublicDependencies();
    }

    public function visita(){
        $this->viewBuilder()->setLayout('site');

        if ($this->request->is('post') && $this->Captcha->captchaIsValid()){
            $formData = $this->request->getData();

            $email = new Email('default');
            $email->setFrom(['consultenos@email.com' => 'Meu Site'])
                ->setTo('consultenos@email.com')
                ->setSubject($formData['company'])
                ->send('Novo email de: '.$formData['nome'].'. Olá, aqui é da empresa: '.$formData['company']. ', Atuamos no segmento de '.$formData['segment'].', localizada em '.$formData['place'].' Gostaria de marcar uma visita dia: '. $formData['date'].' referente a,  '.$formData['msg'].' segue o meu telefone de contato:'.$formData['phone']);

        }


        $this->loadPublicDependencies();
    }

    public function beforeFilter(Event $event)
    {
        $this->Auth->allow(['visita','contato']);
    }
}
