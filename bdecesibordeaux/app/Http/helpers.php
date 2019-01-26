<?php


 function checkPermission($permissions){
    try{
       $userAccess = getMyPermission(auth()->user()->role_id);
    }catch(Exception $e){
      $userAccess = getMyPermission(0);
      $e = "Vous n'etes pas connecté";
    }
   
    foreach ($permissions as $key => $value) {
      if($value == $userAccess){
        return true;
      }
    }
    return false;
  }


  function getMyPermission($id)
  {
    switch ($id) {
      case 0:
      return 'visitor';
      break;
      case 1:
        return 'bde';
        break;
      case 2:
        return 'employee';
        break;
      default:
        return 'student';
        break;
    }
  }

  ?>