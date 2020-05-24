<?php
  if(isset($_POST['add'])){
      $codeNew = $_POST['code'];
      $titleNew = $_POST['title'];
      $authorNew = $_POST['author'];
      $publication_YearNew = $_POST['publication_Year'];
      $publisherNew = $_POST['publisher'];
      $themeNew = $_POST['theme'];

      addBook($codeNew , $titleNew ,$authorNew ,$publication_YearNew,$publisherNew,$themeNew);
  }
    //   echo "$codeNew , $titleNew , $authorNew , $publication_YearNew , $publisherNew , $themeNew";
    //  untuk insert ke buku
    function addBook($codeNew , $titleNew ,$authorNew ,$publication_YearNew,$publisherNew,$themeNew){
      include 'db.php';
        $insertBookSql = "INSERT INTO book (code , title , author , publication_Year , publisher ) VALUES ('$codeNew' , '$titleNew' ,
                          '$authorNew' , '$publication_YearNew' , '$publisherNew')";
        $resultInsert = $mysqli->query($insertBookSql);
    
      //untuk ambil id book dari yang baru dimasukan
      $newBookSql = "SELECT * FROM book WHERE code='$codeNew'";
      $resultNew = $mysqli->query($newBookSql);

      if($resultNew && $resultNew->num_rows > 0){
        $newRow = $resultNew->fetch_array();
        $idBookNew = $newRow['id_Book'];

        //untuk cari id category sesuai di form awal

        $categorySql = "SELECT * FROM category WHERE category_Name='$themeNew'";
        $resultCategory = $mysqli->query($categorySql);
        
        if($resultCategory && $resultCategory->num_rows>0){
          $categoryRow = $resultCategory->fetch_array();
          $idCategoryNew = $categoryRow['id_Category'];
          // echo "id cat : $idCategoryNew $themeNew";

          //insert ke category book
          $category_BookSql = "INSERT INTO category_book (id_Book , id_Category) VALUES ('$idBookNew' , '$idCategoryNew')";
          $result = $mysqli->query($category_BookSql);
          if($result){
            // status add = 1 berhasil
            header("Location: ../pages/admin/books.php?status_Add=1");
          }
        }
      }
    }
?>