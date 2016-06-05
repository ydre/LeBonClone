<?php
namespace OffreBundle\Security;

use OffreBundle\Entity\Offre;
use UserBundle\Entity\User;

use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\Authorization\Voter\Voter;
use Symfony\Component\Security\Core\Authorization\AccessDecisionManagerInterface;

class OffreVoter extends Voter{    
    const VIEW = 'view';
    const EDIT = 'edit';
    const DELETE = 'delete';       

     private $decisionManager;   

     protected function supports($attribute, $subject){       
         if(!in_array($attribute, array(
            self::VIEW, 
            self::EDIT,
            self::DELETE
            ))){
            return false;
           }
        if(!$subject instanceof Offre){
            return false;
           }
         return true;
      }   

     protected function voteOnAttribute($attribute, $subject, TokenInterface $token){

        $user = $token->getUser();        
        if(!$user instanceof User){
            return false;
        }       
         $offre = $subject;        

         switch($attribute){
            case self::VIEW:
                return $this->canView($offre, $user);
            case self::EDIT:
                return $this->canEdit($offre, $user);
            case self::DELETE:
                return $this->canDelete($offre, $user);    
              
          }
        throw new \LogicException('This code should not be reached!');
     }    

    private function canView(Offre  $offre, User $user){
         if($this->canEdit($offre, $user)){
            return true;
         }
         return !$offre->isPrivate();
     }  

    private function canEdit(Offre $offre, User $user){
        return $user === $offre->getUser();
    } 

    private function canDelete(Offre $offre, User $user){
         if($this->canEdit($offre, $user)){
            return true;
         }
    } 

 

   
}

?>