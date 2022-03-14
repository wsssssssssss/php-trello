<!DOCTYPE html>
<html lang="ko">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="theme-color" content="#000000" />
    <meta
      name="description"
      content="Trello"
    />
    <link rel="stylesheet" href="/css/font-awesome.css">
    <link rel="stylesheet" href="/css/style.css">
    <title>Trello</title>
  </head>
  <body>
    <noscript>You need to enable JavaScript to run this app.</noscript>
    <div id="root">
        <header class="flex">
            <!-- <h3>해더 입니다(임시 해더).</h3> -->
            <?php if(user()): ?>
                <p><?=user()->id ?>님 환영합니다.</p>
                <button class="logout_btn">
                    <a href="/logout">로그아웃</a>
                </button>
                <button class="join_btn none">회원가입</button>
                <button class="login_btn none">로그인</button>
            <?php else: ?>
                <p class="none"><?=user()->id ?>님 환영합니다.</p>
                <button class="logout_btn none">
                    <a href="/logout">로그아웃</a>
                </button>
                <button class="join_btn">회원가입</button>
                <button class="login_btn">로그인</button>
            <?php endif; ?>
        </header>

        <div class="container flex">
        <div class="add_list add_btn flex">
            <p class="plus">+</p>
            <p>Add another list</p>
        </div>
        </div>

        <!-- 리스트 추가 팝업 -->
        <div class="popup flex none" id="insert_list_popup">
            <form>
                <div class="insert_list_popup flex">
                    <div class="title">
                        <h3>리스트 추가</h3>
                    </div>
                    <input class="list_title" name="title" type="text" placeholder="리스트 제목을 입력하세요">
                    <div class="btns flex">
                        <input type="button" class="close btn" value="취소">
                        <input type="submit" class="submit_btn btn" id="insert_list_btn" value="리스트 추가">
                    </div>
                </div>
            </form> 
        </div>

        <!-- 카드 추가 팝업 -->
        <div class="popup flex none" id="insert_card_popup">
            <form>
                <input type="hidden" name="list_idx" value="">
                <div class="insert_card_popup flex">
                <div class="title">
                    <h3>카드 추가</h3>
                </div>
                <input name="title" class="text_title" placeholder="카드제목을 입력하세요">
                <div class="btns flex">
                    <input type="button" class="close btn" value="취소">
                    <input type="submit" class="submit_btn btn" id="insert_card_btn" value="카드 추가">
                </div>
                </div>
            </form>
        </div>


        <!-- 카드 팝업 -->
        <div class="popup flex none" id="card_popup">
            <form>
                <input type="hidden" name="list_idx" value="">
                <input type="hidden" name="card_idx" value="">
                <div class="card_popup flex">
                    <div class="title">
                        <h3 class="card_title"></h3>
                        <input type="text" class="card_title_ipt none" value="">
                    </div>
                    <div class="photo">
                        <img src="" alt="">
                    </div>
                    <div class="img_btn flex">
                        <p class="img_text">이미지 추가</p> <input type="file" accept="image/*"  name="img" class="insert_img_btn"> <input type="button" class="img_delete" value="이미지 삭제">
                    </div>
                    <div class="text_content">
                        <textarea name="content" class="card_text_content"></textarea>
                        <input type="text" name="content" class="card_text_content_ipt none" value="">
                    </div>
                    <div class="btns flex">
                        <input type="button" class="close btn" value="닫기">
                        <input type="button" class="card_delete btn" id="card_delete_btn" value="카드 삭제">
                    </div>
                </div>
            </form>
        </div>

        <!-- 회원가입 팝업 -->
        <div class="popup flex none" id="join_popup">
            <form action="/join" method="post">
                <div class="join_popup grid">
                    <div class="title">
                        <h3 class="card_title">회원가입</h3>
                    </div>
                    <div class="content flex">
                        <p>아이디</p>
                        <input type="text" name="id"> <br>
                        <p>비밀번호</p>
                        <input type="password" name="password"> <br>
                        <p>비밀번호 재입력</p>
                        <input type="password" name="passwordc">
                    </div>
                    <div class="btns flex">
                        <input type="button" class="close btn" value="닫기">
                        <input type="submit" class="join_btn btn" id="join_btn" value="회원가입">
                    </div>
                </div>
            </form>
        </div>

        <!-- 로그인 팝업 -->
        <div class="popup flex none" id="login_popup">
            <form action="/login" method="post">
                <div class="login_popup grid">
                    <div class="title">
                        <h3 class="card_title">로그인</h3>
                    </div>
                    <div class="content flex">
                        <p>아이디</p>
                        <input type="text" name="id"> <br>
                        <p>비밀번호</p>
                        <input type="password" name="password"> <br>
                    </div>
                    <div class="btns flex">
                        <input type="button" class="close btn" value="닫기">
                        <input type="submit" class="login_btn btn" id="login_btn" value="로그인">
                    </div>
                </div>
            </form>
        </div>

    </div>
    <script src="/app/index.js"></script>
  </body>
</html>
