<?php

namespace Drupal\betterlogin\EventSubscriber;

use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpKernel\KernelEvents;
use Symfony\Component\HttpKernel\Event\GetResponseEvent;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

class BetterLoginSubscriber implements EventSubscriberInterface {

  public function checkForRedirection(GetResponseEvent $event) {
    if (\Drupal::currentUser()->isAnonymous()) {
      // Anonymous user.
      if ($event->getRequest()->query->get('user')) {
        $event->setResponse(new RedirectResponse('user/login', ['destination' => 'user']));
      }
    }
  }

  /**
   * {@inheritdoc}
   */
  public static function getSubscribedEvents() {
    $events[KernelEvents::REQUEST][] = array('checkForRedirection');
    return $events;
  }

}
