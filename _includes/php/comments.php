// Bad example
<?php

   /*

   Riftside PHP Riot API

   */

   class riotapi {
   
   }

?>
   
// Good example
<?php

   /**
    * Grab a list of the current logged in user's friends
    * @param integer $user_id
    * @return string $friends
    */
   
   function get_friends($user_id) {
      ...
      
      return $friends;
   }
