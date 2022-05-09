<?php
class User
{
   protected $userName;
   protected $passWord;
   protected $numCard;
   protected $registration;
   protected $discount;
   protected $animalType;


   function __contruct($userName, $passWord, $numCard, $registration, $discount, $animalType)
   {

      $this->userName = $userName;
      $this->passWord = $passWord;
      $this->numCard = $numCard;
      $this->registration = $registration;
      $this->discount = $discount;
      $this->animalType = $animalType;
   }

   public function getUserName()
   {
      return $this->userName;
   }

   public function getPassWord()
   {
      return $this->passWord;
   }

   public function getNunCard()
   {
      return $this->numCard;
   }

   public function getRegistration()
   {
      return $this->registration;
   }

   public function getDiscount()
   {
      return $this->discount;
   }

   public function getAnimalType()
   {
      return $this->animalType;
   }
}
