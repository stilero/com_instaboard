/**
 * @version     $Id$
 * @copyright   Copyright 2012 Stilero AB. All rights re-served.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */
jQuery(function($){
    $('#likebtn').click(function(){
        var task = $('input[name=liketask]').val();
        var image_id = $('input[name=likeid]').val();
        
        var params = {
            option: 'com_instaboard',
            view: 'like',
            format: 'raw',
            task: task,
            id: image_id
         };
    
        $.getJSON('index.php', params, function(data){
            if(data.meta.code == '200'){
                showSuccess('<strong>Success!</strong> image '+task+'d.', '#likedialog');
                setBtn(task);
            }else{
                showWarning('<strong>Warning!</strong> Instagram not responding.', '#likedialog');
            }
        }).error(function(){
            showError('<strong>Error!</strong> server error occured.', '#likedialog');
        });
    });
});