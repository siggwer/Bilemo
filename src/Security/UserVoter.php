<?php

namespace App\Security;

use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\Authorization\Voter\Voter;
use App\Entity\Client;
use App\Entity\User;

/**
 * Class UserVoter
 *
 * @package App\Security
 */
class UserVoter extends Voter
{
    public const ITEM = 'item';

    /**
     * @inheritDoc
     */
    protected function supports($attribute, $subject)
    {
        if (!array($attribute, [self::ITEM])){
            return false;
        }
        if (!$subject instanceof Client) {
            return false;
        }

        return true;
    }

    /**
     * @inheritDoc
     */
    protected function voteOnAttribute($attribute, $subject, TokenInterface $token)
    {
        $client = $token->getUser();

        if (!$client instanceof Client) {
            // the user must be logged in; if not, deny access
            return false;
        }

        // you know $subject is a Post object, thanks to supports
        /** @var User $user */
        $user = $subject;

//        switch ($attribute) {
//            case self::READ:
//                return $this->read($post, $client);
//            case self::PUT:
//                return $this->update($post, $client);
//            case self::DELETE:
//                return $this->delete($post, $client);
//        }

        return $user->getClient() === $client;


//        throw new \LogicException('This code should not be reached!');
    }
}