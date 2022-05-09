<?php
class User
{
   protected $userName;
   protected $passWord;
   protected $numCard;
   protected $numShopping;
   protected $discount;
   protected $animalType;


   function __contruct($userName, $passWord, $numCard, $numShopping, $discount, $animalType)
   {

      $this->userName = $userName;
      $this->passWord = $passWord;
      $this->numCard = $numCard;
      $this->numShopping = $numShopping;
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

   public function getNumShopping()
   {
      return $this->numShopping;
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
