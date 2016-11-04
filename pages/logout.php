<?php
setFlash('Signed out');
unset($_SESSION['user']);
redirect('/');