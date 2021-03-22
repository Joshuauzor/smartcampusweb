<?php 
function(){
    if(!session()->admin){
        return redirect()->to('admin/logout');
    }
}
?>