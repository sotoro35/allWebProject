<?php
    header('Content-Type:text/html; charset=utf-8');

    // GET방식으로 전달된 no를 받기
    $no= $_GET['no'];

    // MySQL DB와 연결
    $db = mysqli_connect('localhost','ruaris','a1s2d3f4!','ruaris');
    mysqli_query($db, 'set names utf8');

    $sqlu = "UPDATE website_board SET hits = hits + 1 WHERE no= $no";

    // 'website_board' 테이블에 저장된 no번째 게시글 데이터를 가져오는 쿼리문 작성
    $sql= "SELECT * FROM website_board WHERE no= $no";
    $result = mysqli_query($db, $sql);

    // 결과표로부터 한줄 데이터를 받기
    $board= mysqli_fetch_array($result, MYSQLI_ASSOC);

    // 컬룸들의 값
    $no= $board['no'];
    $title= $board['title'];
    $msg= $board['msg'];
    $writer= $board['writer'];
    $pw= $board['password'];
    $date= $board['date'];
    $hits= $board['hits'];

    //message 데이터는 줄바꿈을 \n으로 가지고 있음. 하지만 화면 표시는 브라우저에서 하기에 줄바꿈 안됨.
    // \n 을 <br> 로 바꿔야 함

    $msg= nl2br($msg);
    

    // MYSQL과 연결 종료
    mysqli_close($db);


?>

<!DOCTYPE html>
<html>
    <head>
        <title>게시판</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- 외부 스타일시트 연결 -->
        <link rel="stylesheet" href="../css/view.css">
    </head>
    <body>
        
        <!-- 콘텐츠가 표시되는 영역 -->
        <div class="board_wrap">

            <!-- 1. 페이지 제목 영역 -->
            <div class="board_title">
                <h2>자유 게시판 - 상세글 보기</h2>
                <p>자유롭게 게시글을 작성하며 이야기를 나누세요.</p>
            </div>

            <!-- 2. 상세글 보여주는 영역 -->
            <div class="board_view_wrap">
                <!-- 2.1 게시글 헤더영역 -->
                <div class="title">
                    <?= $title ?>
                    <!-- JS or PHP를 통해 데이터 표시 -->
                    글 제목 #1
                </div>
                <!-- 2.2 게시글 정보영역 (번호, 작성자, 작성일, 조회수)  -->
                <div class="info">
                    <dl>
                        <dt>번호</dt>
                        <dd><?= $no ?></dd>
                    </dl>
                    <dl>
                        <dt>작성자</dt>
                        <dd><?= $writer ?></dd>
                    </dl>
                    <dl>
                        <dt>작성일</dt>
                        <dd><?= $date ?></dd>
                    </dl>
                    <dl>
                        <dt>조회수</dt>
                        <dd><?= $hits ?></dd>
                    </dl>
                </div>

                <!-- 2.3 게시글 내용영역 -->
                <div class="content">
                    <!-- JS or PHP를 통한 데이터 표시 -->
                   <?= $msg ?>
                </div>

            </div>
           

            <!-- 3. 버튼 표시 영역 -->
            <div class="btn_wrap">
                <a href="../index.php">목록</a>
                <a href="../board/edit.php">수정</a>
            </div>
        </div>

    </body>
</html>