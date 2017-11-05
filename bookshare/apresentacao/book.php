<?php
function display_book_edit($title = null,$url = null,$synopsis = null,$genre = null){
  echo "
  <form method='POST' action='start-new-book/'>
          <div class='book-title-container'>
              <div id='title' width=40%>
                <input value='$title' type='text' class='invisible' name='title' placeholder='Your new book title' required style='min-height: 28px;' pattern='[a-zA-Z0-9 _-]{1,60}' title='Title should have at least 1 and a maximum of 60 characters between letters, numbers, hyphen or underscore!'></div>
              <div id='author' width=40%>By: " . $_SESSION['username'] . "</div>
              <div id='stars' width=10%>*****</div>
          </div>
          <div>
            <div class='float' style='width:250px;max-height:350px;margin-left: 20px;'>
              <img src='css/img/trafford.jpg'>
              <div class='green title' style='margin-right:10px;top:-300px;'>New book Cover URL:<input type='text' class='invisible' name='url' placeholder='http://img.pt/img.png' required pattern='(file|gopher|news|nntp|telnet|https?|ftps?|sftp)://([a-z0-9-]+\.)+[a-z0-9]{1,1000}.*' title='URL format not correct!\nhttp://example.com/image.png' value='$url'></div>
            </div>
            <div class='float' style='min-width: 70%;width:calc(100% - 250px - 20px)'>
              <div class='green title' style='margin-right:50%;'>Synopsis</div>
              <div class='green description' style='min-height:250px;'>
                <textarea value='$synopsis' class='invisible' name='synopsis' rows='8' cols='80' placeholder='Create a summary of your story so that readers can know what to expect or just so that they turn curious enought to go read your first chapter! A little example of a synopsis sample:
                The fantastic adventures of Trafford on it’s path to be the God of all Demons. The fabulous encounters with the Archangels and the fight for supremacy with the demons. How will Trafford rise from a low bastard from a low standing noble demon into the terrifying being know as Demon God?'  required pattern='[\w]{0,1000}.*' title='The synopsis character count should not exceed 1000!'></textarea>
              </div>
            </div>
            <div class='float' style='clear:left;width:100%;' >
              <div class='green title' style='margin-right:50%;'>Choose your book Genres:</div>
              <div class='green description' style=''>
                <div class='float'>
                    <input type='checkbox' value='None' id='G1' name='G1'/>
                    <label class='button button1 check' for='G1'>Action</label>
                    <input type='checkbox' value='None' id='G2' name='G2'/>
                    <label class='button button1 check' for='G2'>Romance</label>
                    <input type='checkbox' value='None' id='G3' name='G3'/>
                    <label class='button button1 check' for='G3'>Sci-phy</label>
                </div>
              </div>
            </div>
          </div>
          <div class='float' style='clear:left;width:100%;' >
            <button class='button button2 float-right' style='width:50%;/*vertical-align:middle*/' onclick='this.form.submit()' name='logout'><i class='logo pencil'></i><p>Send new book informations!</p></button>
          </div>
  </form>
        ";
}
function display_error_title_used($title){
  echo "
  <div class='block title red'>Error!
  </div>
  <div class='block description red'>
    The Title /'$title/' is already in use! Please choose a different Title!
  </div>
        ";
}
//
// function display_book_edit(){
//   echo "
//   <form method='POST' action='start-new-book/'>
//           <div class='book-title-container'>
//               <div id='title' width=40%>
//                 <input type='text' class='invisible' name='title' placeholder='Your new book title' required style='min-height: 28px;' pattern='[a-zA-Z0-9 _-]{1,60}' title='Title should have at least 1 and a maximum of 60 characters between letters, numbers, hyphen or underscore!'></div>
//               <div id='author' width=40%>By: " . $_SESSION['username'] . "</div>
//               <div id='stars' width=10%>*****</div>
//           </div>
//           <div>
//             <div class='float' style='width:250px;max-height:350px;margin-left: 20px;'>
//               <img src='css/img/trafford.jpg'>
//               <div class='green title' style='margin-right:10px;top:-300px;'>New book Cover URL:<input type='text' class='invisible' name='url' placeholder='http://img.pt/img.png' required pattern='(file|gopher|news|nntp|telnet|https?|ftps?|sftp)://([a-z0-9-]+\.)+[a-z0-9]{1,1000}.*' title='URL format not correct!\nhttp://example.com/image.png'></div>
//             </div>
//             <div class='float' style='min-width: 70%;width:calc(100% - 250px - 20px)'>
//               <div class='green title' style='margin-right:50%;'>Synopsis</div>
//               <div class='green description' style='min-height:250px;'>
//                 <textarea class='invisible' name='synopsis' rows='8' cols='80' placeholder='Create a summary of your story so that readers can know what to expect or just so that they turn curious enought to go read your first chapter! A little example of a synopsis sample:
//                 The fantastic adventures of Trafford on it’s path to be the God of all Demons. The fabulous encounters with the Archangels and the fight for supremacy with the demons. How will Trafford rise from a low bastard from a low standing noble demon into the terrifying being know as Demon God?'  required pattern='[\w]{0,1000}.*' title='The synopsis character count should not exceed 1000!'></textarea>
//               </div>
//             </div>
//             <div class='float' style='clear:left;width:100%;' >
//               <div class='green title' style='margin-right:50%;'>Choose your book Genres:</div>
//               <div class='green description' style=''>
//                 <div class='float'>
//                     <input type='checkbox' value='None' id='G1' name='G1'/>
//                     <label class='button button1 check' for='G1'>Action</label>
//                     <input type='checkbox' value='None' id='G2' name='G2'/>
//                     <label class='button button1 check' for='G2'>Romance</label>
//                     <input type='checkbox' value='None' id='G3' name='G3'/>
//                     <label class='button button1 check' for='G3'>Sci-phy</label>
//                 </div>
//               </div>
//             </div>
//           </div>
//           <div class='float' style='clear:left;width:100%;' >
//             <button class='button button2 float-right' style='width:auto;/*vertical-align:middle*/' onclick='this.form.submit()' name='logout'><i class='logo pencil'></i><p>Create new Book!</p></button>
//           </div>
//   </form>
//         ";
// }

 ?>
