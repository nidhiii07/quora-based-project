<?php
session_start();

    include("connections.php");
    include("functions.php");

    $user_data = check_login($con);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QES</title>
</head>
<body>
    <a href="logout.php">logout</a>
    <nav>
        <div id=hello>
            <img id=logo1 src="../icon1.png">
            <i id=home class="fas fa-home">&nbspHome</i>
            <i id=following class="far fa-file-alt">&nbspFollowing</i>
            <i id=answer class="fas fa-pen-square">&nbspAnswer</i>
            <i id=space class="fas fa-user-friends">&nbspSpaces </i>
            <i id=notification class="far fa-bell">&nbspNotifications</i>
       
           
            
            
                <i id=search class="fas fa-search"></i>
                <input  type='text' placeholder="Search Quora">
        
            <img id=logo2 src='../ashish.jpg'>
            <i class="fas fa-globe fa-lg"></i>
            <div id=ques>
                <div>
                   Questions...
                </div>
            </div>
        </div>
    </nav>
    <div id=read_more>
       <p>Quora uses cookies to improve your experience.<span>Read More</span></p>
    </div>
    <div id=content>
        <div id=left>
            <ul>
                <li>
                    <img src="../pic2.jpg" alt="">
                    <div id=dot></div>
                    <p>Psychology</p>
                    
                </li>
                <li>
                    
                    <img src="../pic3.jpg" alt="">
                    <div id=dot></div>
                    <p>Science</p>
                    

                </li>
                <li>
                    <img src="../pic4.jpg" alt="">
                    <div id=dot></div>
                    <p>Photography</p>
                   

                </li>
                <li>
                    <img src="../pic5.jpg" alt="">
                    <div id=dot></div>
                    <p>Movies</p>
                    

                </li>
                <li>
                    <img src="../pic6.jpg" alt="">
                    <div id=dot></div>
                    <p>Music</p>
                  

                </li>
                <li>
                    <img src="../pic7.jpg" alt="">
                    <div id=dot></div>
                    <p>History</p>
                  

                </li>
                <li>
                    <img src="../pic8.jpg" alt="">
                    <div id=dot></div>
                    <p>Sports</p>
                   

                </li>
                <li>
                    <img src="../pic10.jpg" alt="">
                    <div id=dot></div>
                    <p>Cooking</p>
                    

                </li>
                <li>
                    <img src="../pic9.jpg" alt="">
                    <div id=dot></div>
                    <p>Business</p>
                    

                </li>
                <li>
                    <img src="../pic11.jpg" alt="">
                    <div id=dot></div>
                    <p>Visiting and Travel</p>
                    

                </li>
                <li>
                    <img src="../pic2.jpg" alt="">
                    <div id=dot></div>
                    <p>Screenshots</p>
                    

                </li>
                <li>
                    <img src="../pic5.jpg" alt="">
                    <div id=dot></div>
                    <p>Photograph</p>
                    
                </li>
                <li id=last_one>
                    <i class='fas fa-plus'>&nbsp&nbsp&nbsp&nbsp&nbspDiscover Spaces </i>
                    
                </li>
                <br>
                <hr>
               <ul id=contact>
                   <li>*About</li>
                   <li>*Careers</li>
                   <li>*Privacy</li>
                   <li>*Acceptable Use</li>
                   <li>*Business</li>
                   <li>*Your Ad Choices</li>

               </ul>
            </ul>
        </div>

        <div id=middle>
            <div id=box11>
               <img src="../pic2.jpg" alt="">
               <p>Ashish kumar</p>
               <h4>what is your question or link?</h4>
            </div>
            <div id=box22>
               <p id=num1>Answer.Recommended for you</p>
               <img id=num2 src='../pic2.jpg'>
               <p id=num3>Alok Kumar</p>
               <p id=num4>worked at Nation Informatics Centre</p>
               <i id=num5 class="fas fa-times"></i>
               <i id=num6 class="fas fa-address-book"></i>
               <h4 id=num7>Is it true that Microsoft pays 45 LPA to the freshers from NIT's or IIT's in India?</h4>
              <p id=num8>Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui, veniam omnis fuga obcaecati fugit aspernatur beatae, in enim provident corporis dolore neque totam cum aliquid veritatis ratione consequuntur sequi eveniet!<span>&nbsp(more)</span></p>
              <img id=num9 src='../pic2.jpg'>
              <div id=num10>
                  <div id=num11>
                      <div id=num12>
                        <i id=num14 class="fas fa-arrow-circle-up">&nbsp88</i>
                        <i id=num13 class="fas fa-arrow-circle-down"></i>
                      </div>
                      <i id=num15 class="fas fa-sync-alt"></i>
                      <i id=num16 class="far fa-comment-dots"></i>
                  </div>
                  <div>
                    <i id=num15 class="fas fa-share"></i>
                    <i id=num15 class="fas fa-ellipsis-h"></i>
                  </div>
              </div>
              
              <div id=bottom>
                
                  <img src='../pic2.jpg'>
                  <p>3 more stories from Alok Kumar</p>
                  <i class="fas fa-level-up-alt"></i>
              </div>
            
            </div>


           
             <div id=box22>
                <p id=num1>Answer.Recommended for you</p>
                <img id=num2 src='../pic8.jpg'>
                <p id=num3>Ashish Kumar</p>
                <p id=num4>worked at Nation Informatics Centre</p>
                <i id=num5 class="fas fa-times"></i>
                <i id=num6 class="fas fa-address-book"></i>
                <h4 id=num7>Is it true that Microsoft pays 45 LPA to the freshers from NIT's or IIT's in India?</h4>
               <p id=num8>Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui, veniam omnis fuga obcaecati fugit aspernatur beatae, in enim provident corporis dolore neque totam cum aliquid veritatis ratione consequuntur sequi eveniet!<span>&nbsp(more)</span></p>
               <img id=num9 src='../pic8.jpg'>
               <div id=num10>
                   <div id=num11>
                       <div id=num12>
                         <i id=num14 class="fas fa-arrow-circle-up">&nbsp88</i>
                         <i id=num13 class="fas fa-arrow-circle-down"></i>
                       </div>
                       <i id=num15 class="fas fa-sync-alt"></i>
                       <i id=num16 class="far fa-comment-dots"></i>
                   </div>
                   <div>
                     <i id=num15 class="fas fa-share"></i>
                     <i id=num15 class="fas fa-ellipsis-h"></i>
                   </div>
               </div>
               
               <div id=bottom>
                 
                   <img src='../pic8.jpg'>
                   <p>3 more stories from Ashish Kumar</p>
                   <i class="fas fa-level-up-alt"></i>
               </div>
             
             </div>


        
             <div id=box22>
                <p id=num1>Answer.Recommended for you</p>
                <img id=num2 src='../pic10.jpg'>
                <p id=num3>Azad Kumar</p>
                <p id=num4>worked at Nation Informatics Centre</p>
                <i id=num5 class="fas fa-times"></i>
                <i id=num6 class="fas fa-address-book"></i>
                <h4 id=num7>Is it true that Microsoft pays 45 LPA to the freshers from NIT's or IIT's in India?</h4>
               <p id=num8>Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui, veniam omnis fuga obcaecati fugit aspernatur beatae, in enim provident corporis dolore neque totam cum aliquid veritatis ratione consequuntur sequi eveniet!<span>&nbsp(more)</span></p>
               <img id=num9 src='../pic10.jpg'>
               <div id=num10>
                   <div id=num11>
                       <div id=num12>
                         <i id=num14 class="fas fa-arrow-circle-up">&nbsp88</i>
                         <i id=num13 class="fas fa-arrow-circle-down"></i>
                       </div>
                       <i id=num15 class="fas fa-sync-alt"></i>
                       <i id=num16 class="far fa-comment-dots"></i>
                   </div>
                   <div>
                     <i id=num15 class="fas fa-share"></i>
                     <i id=num15 class="fas fa-ellipsis-h"></i>
                   </div>
               </div>
               
               <div id=bottom>
                   <img src='../pic10.jpg'>
                   <p>3 more stories from Azad Kumar</p>
                   <i class="fas fa-level-up-alt"></i>
               </div>
             
             </div>


           
            
              
             <div id=carousel>
                 <div id=box1>
                     <img src="../pic2.jpg" alt="">
                     <p>Discover New Spaces</p>
                 </div>
                 <div id=box2>
                     <div id=box4>
                         <img src="../pic3.jpg" alt="">
                         <img src='../pic3.jpg'>
                         <i id=num5 class="fas fa-times"></i>
                         <p id=para1>Data Science Enthusiasts</p>
                         <p id=para2>Data science enthusiasts from beginners to experts...</p>
                     </div>
                     <div id=box4>
                        <img src="../pic8.jpg" alt="">
                        <img src='../pic8.jpg'>
                        <i id=num5 class="fas fa-times"></i>
                        <p id=para1>Data Science Enthusiasts</p>
                        <p id=para2>Data science enthusiasts from beginners to experts...</p>
                    </div>
                    <div id=box4>
                        <img src="../pic9.jpg" alt="">
                        <img src='../pic9.jpg'>
                        <i id=num5 class="fas fa-times"></i>
                        <p id=para1>Data Science Enthusiasts</p>
                        <p id=para2>Data science enthusiasts from beginners to experts...</p>
                    </div>
                 </div>
                 <div id=inner>
                    <p>view More Spaces</p>
                    <i id=name class="fas fa-chevron-right"></i>                 </div>
                   
             </div>

            <div id=questions_for_you>
                 <div id=portion1>
                    <img src='../pic2.jpg'>
                    <p>Questions for you</p>
                 </div>
                 <div id="portion2">
                     
                    <p>Question added.Computer Programming.Topic you might like</p>
                    <p>Why is 'size_t' sometimes used instead of 'int' for declaring an array index in C? Is there any difference?</p>
                    <p><span>1 Answer.</span>Last followed 33m ago</p>
                    <div id=portion3>
                        <div>
                            <i class="fas fa-heart">&nbspAnswer</i>
                            <i class="fas fa-heart">&nbspFollow.1</i>
                            <i class="fas fa-heart">&nbspPass</i>

                        </div>
                        <div>
                            <i class='fas fa-heart'></i>
                            <i class='fas fa-heart'></i>
                        </div>
                      
                    </div>
                    <i id=cross class='fas fa-heart'></i>
                </div>
                <div id=portion2 class='port'>
                    <p>Question added.Computer Programming.Topic you might like</p>
                    <p>Why is 'size_t' sometimes used instead of 'int' for declaring an array index in C? Is there any difference?</p>
                    <p><span>1 Answer.</span>Last followed 33m ago</p>
                    <div id=portion3>
                        <div>
                            <i class="fas fa-heart">&nbspAnswer</i>
                            <i class="fas fa-heart">&nbspFollow.1</i>
                            <i class="fas fa-heart">&nbspPass</i>

                        </div>
                        <div>
                            <i class='fas fa-heart'></i>
                            <i class='fas fa-heart'></i>
                        </div>
                       
                    </div>
                    <i id=cross class='fas fa-heart'></i>
                </div>
            </div>
            
            <div id=box22>
                <p id=num1>Answer.Recommended for you</p>
                <img id=num2 src='../pic5.jpg'>
                <p id=num3>Aman kumar</p>
                <p id=num4>worked at Nation Informatics Centre</p>
                <i id=num5 class="fas fa-times"></i>
                <i id=num6 class="fas fa-address-book"></i>
                <h4 id=num7>Is it true that Microsoft pays 45 LPA to the freshers from NIT's or IIT's in India?</h4>
               <p id=num8>Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui, veniam omnis fuga obcaecati fugit aspernatur beatae, in enim provident corporis dolore neque totam cum aliquid veritatis ratione consequuntur sequi eveniet!<span>&nbsp(more)</span></p>
               <img id=num9 src='../pic5.jpg'>
               <div id=num10>
                   <div id=num11>
                       <div id=num12>
                         <i id=num14 class="fas fa-arrow-circle-up">&nbsp88</i>
                         <i id=num13 class="fas fa-arrow-circle-down"></i>
                       </div>
                       <i id=num15 class="fas fa-sync-alt"></i>
                       <i id=num16 class="far fa-comment-dots"></i>
                   </div>
                   <div>
                     <i id=num15 class="fas fa-share"></i>
                     <i id=num15 class="fas fa-ellipsis-h"></i>
                   </div>
               </div>
               
               <div id=bottom>
                 
                   <img src='../pic5.jpg'>
                   <p>3 more stories from Aman Kumar</p>
                   <i class="fas fa-level-up-alt"></i>
               </div>
             </div>

             <div id=box22>
                <p id=num1>Answer.Recommended for you</p>
                <img id=num2 src='../pic6.jpg'>
                <p id=num3>Aman kumar</p>
                <p id=num4>worked at Nation Informatics Centre</p>
                <i id=num5 class="fas fa-times"></i>
                <i id=num6 class="fas fa-address-book"></i>
                <h4 id=num7>Is it true that Microsoft pays 45 LPA to the freshers from NIT's or IIT's in India?</h4>
               <p id=num8>Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui, veniam omnis fuga obcaecati fugit aspernatur beatae, in enim provident corporis dolore neque totam cum aliquid veritatis ratione consequuntur sequi eveniet!<span>&nbsp(more)</span></p>
               <img id=num9 src='../pic6.jpg'>
               <div id=num10>
                   <div id=num11>
                       <div id=num12>
                         <i id=num14 class="fas fa-arrow-circle-up">&nbsp88</i>
                         <i id=num13 class="fas fa-arrow-circle-down"></i>
                       </div>
                       <i id=num15 class="fas fa-sync-alt"></i>
                       <i id=num16 class="far fa-comment-dots"></i>
                   </div>
                   <div>
                     <i id=num15 class="fas fa-share"></i>
                     <i id=num15 class="fas fa-ellipsis-h"></i>
                   </div>
               </div>
               
               <div id=bottom>
                 
                   <img src='../pic6.jpg'>
                   <p>3 more stories from Aman Kumar</p>
                   <i class="fas fa-level-up-alt"></i>
               </div>
             </div>
             

             <div id=box22>
                <p id=num1>Answer.Recommended for you</p>
                <img id=num2 src='../pic4.jpg'>
                <p id=num3>Aman kumar</p>
                <p id=num4>worked at Nation Informatics Centre</p>
                <i id=num5 class="fas fa-times"></i>
                <i id=num6 class="fas fa-address-book"></i>
                <h4 id=num7>Is it true that Microsoft pays 45 LPA to the freshers from NIT's or IIT's in India?</h4>
               <p id=num8>Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui, veniam omnis fuga obcaecati fugit aspernatur beatae, in enim provident corporis dolore neque totam cum aliquid veritatis ratione consequuntur sequi eveniet!<span>&nbsp(more)</span></p>
               <div id=num10>
                   <div id=num11>
                       <div id=num12>
                         <i id=num14 class="fas fa-arrow-circle-up">&nbsp88</i>
                         <i id=num13 class="fas fa-arrow-circle-down"></i>
                       </div>
                       <i id=num15 class="fas fa-sync-alt"></i>
                       <i id=num16 class="far fa-comment-dots"></i>
                   </div>
                   <div>
                     <i id=num15 class="fas fa-share"></i>
                     <i id=num15 class="fas fa-ellipsis-h"></i>
                   </div>
               </div>
               
               <div id=bottom>
                 
                   <img src='../pic4.jpg'>
                   <p>3 more stories from Aman Kumar</p>
                   <i class="fas fa-level-up-alt"></i>
               </div>
             </div>

             <div id=box22>
                <p id=num1>Answer.Recommended for you</p>
                <img id=num2 src='../pic9.jpg'>
                <p id=num3>Aman kumar</p>
                <p id=num4>worked at Nation Informatics Centre</p>
                <i id=num5 class="fas fa-times"></i>
                <i id=num6 class="fas fa-address-book"></i>
                <h4 id=num7>Is it true that Microsoft pays 45 LPA to the freshers from NIT's or IIT's in India?</h4>
               <p id=num8>Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui, veniam omnis fuga obcaecati fugit aspernatur beatae, in enim provident corporis dolore neque totam cum aliquid veritatis ratione consequuntur sequi eveniet!<span>&nbsp(more)</span></p>
               <div id=num10>
                   <div id=num11>
                       <div id=num12>
                         <i id=num14 class="fas fa-arrow-circle-up">&nbsp88</i>
                         <i id=num13 class="fas fa-arrow-circle-down"></i>
                       </div>
                       <i id=num15 class="fas fa-sync-alt"></i>
                       <i id=num16 class="far fa-comment-dots"></i>
                   </div>
                   <div>
                     <i id=num15 class="fas fa-share"></i>
                     <i id=num15 class="fas fa-ellipsis-h"></i>
                   </div>
               </div>
               
               <div id=bottom>
                 
                   <img src='../pic9.jpg'>
                   <p>3 more stories from Aman Kumar</p>
                   <i class="fas fa-level-up-alt"></i>
               </div>
             </div>
            
          
         
           <div id=box22>
            <p id=num1>Answer.Recommended for you</p>
            <img id=num2 src='../pic7.jpg'>
            <p id=num3>Alok Kumar</p>
            <p id=num4>worked at Nation Informatics Centre</p>
            <i id=num5 class="fas fa-times"></i>
            <i id=num6 class="fas fa-address-book"></i>
            <h4 id=num7>Is it true that Microsoft pays 45 LPA to the freshers from NIT's or IIT's in India?</h4>
           <p id=num8>Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui, veniam omnis fuga obcaecati fugit aspernatur beatae, in enim provident corporis dolore neque totam cum aliquid veritatis ratione consequuntur sequi eveniet!<span>&nbsp(more)</span></p>
           <img id=num9 src='../pic7.jpg'>
           <div id=num10>
               <div id=num11>
                   <div id=num12>
                     <i id=num14 class="fas fa-arrow-circle-up">&nbsp88</i>
                     <i id=num13 class="fas fa-arrow-circle-down"></i>
                   </div>
                   <i id=num15 class="fas fa-sync-alt"></i>
                   <i id=num16 class="far fa-comment-dots"></i>
               </div>
               <div>
                 <i id=num15 class="fas fa-share"></i>
                 <i id=num15 class="fas fa-ellipsis-h"></i>
               </div>
           </div>
           
           <div id=bottom>
             
               <img src='../pic7.jpg'>
               <p>3 more stories from Alok Kumar</p>
               <i class="fas fa-level-up-alt"></i>
           </div>
         
         </div>
           <p class='spinner'>Loading...</p>
        </div>

        <div id=right>
           <div id=block1>
                    <div class="box1" id='special'>
                        <p>Improve Your Feed</p>
                    </div>
                    <div class=box1>
                        <input type="checkbox" name="" id="">
                        <p>&nbsp&nbspFollow 5 more Spaces</p>
                    </div>
                    
                    <div class=box1>
                        <input type="checkbox" name="" id="">
                        <p>&nbsp&nbspUpvote 2 more good pieces of content ashish</p>
                    </div>

                    <div class=box1>
                        <input type="checkbox" name="" id="">
                        <p>&nbsp&nbspAsk a question</p>
                    </div>

                    <div class=box1>
                        <input type="checkbox" name="" id="">
                        <p>&nbsp&nbspAdd 3 credentials about where you live,work or study</p>
                    </div>

                    <div class=box1>
                        <input type="checkbox" name="" id="">
                        <p>&nbsp&nbspAnswer a question</p>
                    </div>
                    
            </div>

                <div id=block2>
                     <div class=box2>
                         <p>Spaces to follow</p>
                     </div>
                     <div id=box3>
                         <img src="../pic3.jpg">
                         <p id=highlight>All About IITs</p>
                         <p id='new' >The perfect plact to find everything relat...</p>
                     </div>
                     <div id=box3>
                        <img src="../pic4.jpg">
                        <p id=highlight>Tech Programming</p>
                        <p id='new'>For Programming and Technology Updates</p>
                    </div>
                    <div id=box3>
                        <img src="../pic5.jpg">
                        <p id=highlight>Daily Dose of Vocabulary</p>
                        <p id='new'>All about words</p>
                    </div>
                    <div id=box3>
                        <img src="../pic6.jpg">
                        <p id=highlight>GATE CS exam(CS Careers)</p>
                        <p id='new'>For GATE CSE aspirant</p>
                    </div>
                    <div id=box3>
                        <img src="../pic7.jpg">
                        <p id=highlight>Daily Coding problems</p>
                        <p id='new'>All about Coding!</p>
                    </div>
                    <div id=box3>
                        <img src="../pic8.jpg">
                        <p id=highlight>Free Udemy Courses</p>
                        <p id='new'>We Update Udemy 100% off coupouns...</p>
                    </div>
                    <div id=box3>
                        <img src="../pic9.jpg">
                        <p id=highlight>Enterpreneurship</p>
                        <p id='new'>Enterpreneurship stories and Tips for Busine...</p>
                    </div>
                    <div id=box3>
                        <img src="../pic10.jpg">
                        <p id=highlight>Data Science Enthusiasts</p>
                        <p id='new'>Data science enthusiasts from...</p>
                    </div>
                    <div id=box3>
                        <img src="../pic11.jpg">
                        <p id=highlight>Stay Motivated</p>
                        <p id='new'>A Space exculisive for motivation or...</p>
                    </div>
                </div>

        </div>
    </div>

</body>
</html>