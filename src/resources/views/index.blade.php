<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Contact Form</title>
  <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/index.css') }}" />
</head>

<body>
  <header class="header">
    <div class="header__inner">
      <a class="header__logo" href="/">
        FashionablyLate
      </a>
    </div>
  </header>

  <main>
    <div class="contact-form__content">
      <div class="contact-form__heading">
        <h2>Contact</h2>
      </div>
      <form class="form" action="/confirm" method="post">
      @csrf
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">お名前</span>
            <span class="form__label--required">必須</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--text">
              <input type="text" name="last_name" placeholder="例：山田" />
              <input type="text" name="first_name" placeholder="例：太郎" />
            </div>
            <div class="form__error">
            @error('name')
            {{ $message }} 
            @enderror
            </div>
          </div>
        </div>
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">性別</span>
            <span class="form__label--required">必須</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--radio">
              <input type="radio" name="sex" value="男性" />
              <label for="">男性</label>
              <input type="radio" name="sex" value="女性" />
              <label for="">女性</label>
              <input type="radio" name="sex" value="その他" />
              <label for="">その他</label>

            </div>
            <div class="form__error">
            @error('sex')
            {{ $message }} 
            @enderror
            </div>
          </div>
        </div>        
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">メールアドレス</span>
            <span class="form__label--required">必須</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--text">
              <input type="email" name="email" placeholder="test@example.com" />
            </div>
            <div class="form__error">
            @error('email')
            {{ $message }} 
            @enderror
            </div>
          </div>
        </div>
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">電話番号</span>
            <span class="form__label--required">必須</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--text">
              <input type="tel" name="tel" placeholder="09012345678" />
            </div>
            <div class="form__error">
            @error('tel')
            {{ $message }} 
            @enderror
            </div>
          </div>
        </div>
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">住所</span>
            <span class="form__label--required">必須</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--text">
              <input type="text" name="address" placeholder="例:東京都渋谷区千駄ヶ谷1-2-3" />
            </div>
            <div class="form__error">
            @error('address')
            {{ $message }} 
            @enderror
            </div>
          </div>
        </div>
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">建物名</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--text">
              <input type="text" name="building" placeholder="例:千駄ヶ谷マンション101" />
            </div>
            <div class="form__error">
            @error('building')
            {{ $message }} 
            @enderror
            </div>
          </div>
        </div>
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">お問い合わせの種類</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--text">
              <select name="select">
              <option value="" selected>選択してください</option>
                <option value="商品のお届けについて">商品のお届けについて</option>
                <option value="商品の交換について">商品の交換について</option>
                <option value="商品トラブル">商品トラブル</option>
                <option value="ショップへのお問い合わせ">ショップへのお問い合わせ</option>
                <option value="その他">その他</option>
              </select>
            </div>
            <div class="form__error">
            @error('select')
            {{ $message }} 
            @enderror
            </div>
          </div>
        </div>
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">お問い合わせ内容</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--textarea">
              <textarea name="content" placeholder="お問い合わせ内容をご記載下さい"></textarea>
            </div>
            <div class="form__error">
            @error('content')
            {{ $message }} 
            @enderror
            </div>
          </div>
        </div>
        <div class="form__button">
          <button class="form__button-submit" type="submit">確認画面</button>
        </div>
      </form>
    </div>
  </main>
</body>

</html>
