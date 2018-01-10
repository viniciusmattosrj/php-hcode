<?php
    /* FUNÇÕES ANÔNIMAS */
   function test($callback)
   {
        //Processo lento
        $callback();
   }

   test(function()
   {
       echo "Terminou";
   });