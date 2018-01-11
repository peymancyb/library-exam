<html>
    <head>
        <title>Library</title>
        <style>
            body{
                margin:0;
                padding:0;
                background-color:white;
                font-family: sans-serif;
            }
            .container{
                display: flex;
                align-items: center;
                justify-content: center;

            }
            .head-container{
                height: 80px;
                background-color:#01b4df;
                color:ghostwhite;
            }
            ul{
                list-style-type: none;
            }
            li{
                float: right;
                padding: 30px;
            }
            li a {
                display: block;
                text-decoration: none;
                color:ghostwhite;
            }
            li a:hover{
                color:white;
            }
            .slider{
                display:flex;
                align-content: center;
                align-items: center;
                justify-content: center;
            }
            table{
                margin-left: 40px;
            }
            td{
                padding-top:10px;
            }
            #logoDesign{
                float: left;
                padding-left:50px;
                padding-top:10px;
                width: 60px;

            }
            .boxContainer{
                margin:10px;
                width:80%;
                height: 400px;
                border: 2px solid;
                border-color:#01b4df;
            }
            .headerText{
                text-align: center;
            }
            .scrollOver{
                width:100%;
                height: 400px;
                overflow: scroll;
                text-align: justify;
            }
            .searchResults{
                width: 80%;
                height: 400px;
                overflow:scroll;
                text-align: justify;
                margin-left:2%;
            }
            .borderLine td{
                border-bottom:1px solid;
                border-color:#1fc4a4;
            }
        </style>
    </head>


    <body>
            <h1 style="margin-left:40%; text-align:center; border-bottom:2px solid; border-color:#01b4df; width:250px;">
                WELCOME
            </h1>
            <center>



            <div class="boxContainer">
                <p class="headerText">Insert Book</p>


                <form action="<?php echo($_SERVER['PHP_SELF']) ?>" method="post">
                    <table>
                        <tr>
                            <td>
                                <p>Book name:</p>
                            </td>
                            <td>
                                <input type="text" name="BookN" placeholder="Book name"/>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>Publisher:</p>
                            </td>
                            <td>
                                <input type="text" name="Publisher" placeholder="Publisher"/>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>Page count:</p>
                            </td>
                            <td>
                                <input type="number" name="PageC" placeholder="Page count" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>Publish Data:</p>
                            </td>
                            <td>
                                <input type="date" name="PublishD" placeholder="Publish Data" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>ID:</p>
                            </td>
                            <td>
                                <input type="number" name="IDD" placeholder="ID" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="submit" value="submit" name="SubmitB" />
                            </td>
                        </tr>
                    </table>
                </form>
                <div class="searchResults borderLine">
                    <?php
                    function renderDATA(){
                     include('Book.php');
                    }
                    if(isset($_POST['SubmitB'])){
                        renderDATA();
                    }
                    ?>
                </div>
            </div>



            <div class="boxContainer " style="overflow:hidden;">
                <p class="headerText">List of Books</p>
                <div class="scrollOver borderLine">
                    <?php
                        include('BookList.php');
                    ?>
                </div>
            </div>




                          <div class="boxContainer">
                              <p class="headerText">Delete Book</p>
                              <form action="<?php echo($_SERVER['PHP_SELF']) ?>" method="post">
                                  <table>
                                      <tr>
                                          <td>
                                              <p>Title of book:</p>
                                          </td>
                                          <td>
                                              <input type="text" name="BookNN" placeholder="Book name"/>
                                          </td>
                                      </tr>
                                      <tr>
                                          <td>
                                              <p>Authors:</p>
                                          </td>
                                          <td>
                                              <input type="text" name="PublisherR" placeholder="Publisher"/>
                                          </td>
                                      </tr>
                                      <tr>
                                          <td>
                                              <p>Number of pages:</p>
                                          </td>
                                          <td>
                                              <input type="number" name="PageCC" placeholder="Page count" />
                                          </td>
                                      </tr>
                                      <tr>
                                          <td>
                                              <p>Date of publishing:</p>
                                          </td>
                                          <td>
                                              <input type="date" name="PublishDD" placeholder="Publish Data" />
                                          </td>
                                      </tr>
                                      <tr>
                                          <td>
                                              <p>ID:</p>
                                          </td>
                                          <td>
                                              <input type="number" name="IDT" placeholder="ID" />
                                          </td>
                                      </tr>
                                      <tr>
                                          <td>
                                              <input type="submit" value="submit" name="SubmitBB" />
                                          </td>
                                      </tr>
                                  </table>
                              </form>
                              <div class="searchResults borderLine">
                                  <?php
                                  function DeleteData(){
                                   include('deleteBook.php');
                                  }
                                  if(isset($_POST['SubmitBB'])){
                                      DeleteData();
                                  }
                                  ?>
                              </div>
                          </div>

          </center>
<br><br>

    </body>
</html>
