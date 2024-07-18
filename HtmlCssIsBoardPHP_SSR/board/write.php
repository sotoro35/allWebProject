<!DOCTYPE html>
<html>
    <head>
        <title>게시판</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- 외부 스타일시트 연결 -->
        <link rel="stylesheet" href="../css/write.css">
    </head>
    <body>
        
        <!-- 콘텐츠가 표시되는 영역 -->
        <div class="board_wrap">

            <!-- 1. 페이지 제목 영역 -->
            <div class="board_title">
                <h2>자유 게시판 - 게시글 작성</h2>
                <p>자유롭게 게시글을 작성하며 이야기를 나누세요.</p>
            </div>

            <!-- 2. 글 작성하는 영역 -->
            <form action="../backend/board/insertBoard.php" method="post">

                <!-- 사용자 입력 영역 -->
                <div class="board_write_wrap">
                    <!-- 2.1 제목 작성 영역 -->
                    <div class="title">
                        <div class="col_label">제목</div>
                        <div class="col_input"><input type="text" placeholder="제목 입력" name="title"></div>
                    </div>

                    <!-- 2.2 작성자 / 비리번호 작성 영역 -->
                    <div class="info">
                        <div class="writer">
                            <div class="col_label">글쓴이</div>
                            <div class="col_input"><input type="text" placeholder="작성자 입력" name="writer"></div>
                        </div>

                        <div class="password">
                            <div class="col_label">비밀번호</div>
                            <div class="col_input"><input type="password" placeholder="비밀번호 입력 "name="pw"></div>
                        </div>
                    </div>

                    <!-- 2.3 내용 작성 영역 -->
                    <div class="content">

                        <textarea placeholder="내용을 입력하세요" name="msg"></textarea>

                    </div>


                </div>

                    <!-- 3. 버튼 표시 영역 -->
                <div class="btn_wrap">
                    <input type="submit" value="저장">
                    <a href="../index.php">취소</a>
                </div>

            </form>
        </div>

    </body>
</html>