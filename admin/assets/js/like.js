/**
 * @version     $Id$
 * @copyright   Copyright 2012 Stilero AB. All rights re-served.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */
jQuery(function($){
    
    var setLikeBtn = function(){
        $('#likebtn').removeClass('btn-warning');
        $('#likebtn').addClass('btn-success');
        $('#likebtn').text('');
        $('input[name=task]').val('like');
        $('<i class="icon-heart icon-white"></i><span> Like</span>').appendTo('#likebtn');
        
    };
    
    var setUnlikeBtn = function(){
        $('#likebtn').removeClass('btn-success');
        $('#likebtn').addClass('btn-warning');
        $('#likebtn').text('');
        $('input[name=task]').val('unlike');
        $('<i class="icon-ban-circle icon-white"></i><span> Unlike</span>').appendTo('#likebtn');
    };
    
    var setBtn = function($task){
        if($task == 'like'){
            setUnlikeBtn();
        }else{
            setLikeBtn();
        }
    };
    
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