<?php
/***************************************************************************
 *                          lang_faq.php [japanese]
 *                            -------------------
 *   begin                : Wednesday Oct 3, 2001
 *   copyright            : (C) 2001 The phpBB Group
 *   email                : support@phpbb.com
 *
 *   $Id: lang_faq.php,v 1.4 2001/12/15 16:42:08 psotfx Exp $
 *
 *
 ***************************************************************************/

/***************************************************************************
 *
 *   This program is free software; you can redistribute it and/or modify
 *   it under the terms of the GNU General Public License as published by
 *   the Free Software Foundation; either version 2 of the License, or
 *   (at your option) any later version.
 *
 ***************************************************************************/
 
//
// Translation by:
//
// Yoichi Iwaki  :: yoichi01@rr.iij4u.or.jp
//
// For questions and comments use: yoichi01@rr.iij4u.or.jp
//


// 
// To add an entry to your FAQ simply add a line to this file in this format:
// $faq[] = array("question", "answer");
// If you want to separate a section enter $faq[] = array("--","Block heading goes here if wanted");
// Links will be created automatically
//
// DO NOT forget the ; at the end of the line.
// Do NOT put double quotes (") in your FAQ entries, if you absolutely must then escape them ie. \"something\"
//
// The FAQ items will appear on the FAQ page in the same order they are listed in this file
//
 
  
$faq[] = array("--","ログインと登録に関する問題");
$faq[] = array("何故ログインできないのでしょうか？", "ユーザー登録は行いましたか？ログインするためにはユーザー登録を行う必要があります。あるいは掲示板の使用を禁止されていますか（禁止されている場合は画面に禁止されていると表示されます）？ 使用を禁止されている場合は、管理者に何故禁止されたのかを問い合わせる必要があります。上記のことが原因でないにも関わらずログインができない場合は、ログイン時の名前とパスワードを確かめてください。通常はこれが問題であることが多いですが、これでもない場合は管理者に問い合わせてください。");
$faq[] = array("登録は必ずしなければいけないですか？", "掲示板の管理方針によっては、ログインしなくても投稿するできる場合がありますので、必ずしも登録する必要はありません。しかし、登録をすることでユーザー画像の使用、プライベートメッセージ（PM）の使用、仲間のユーザーへのメール送信、グループの参加など様々な機能にアクセスすることができるようになります。登録をしていないゲストユーザーの場合は、利用できる機能が登録ユーザーよりも少ないです。登録は数分で行うことができますので、掲示板をよく使う場合はユーザー登録することをお勧めします。");
$faq[] = array("何故自動的にログオフしてしまうのでしょうか？", "「自動ログインを有効にする」のボックスをチェックしていない場合は、一時的にしかログインしません。 常にログイン状態でありたい場合は、このボックスをチェックしてからログインします。この自動ログイン機能は図書館、インターネット喫茶、大学などの共有されたコンピューター環境では利用しないことをお勧めします。");
$faq[] = array("オンライン状態のユーザーとして名前をリストに表示されないようにするにはどうすればいいのでしょうか？", "ユーザー設定にある「オンラインステータスを隠す」を「はい」にすると、あなたのオンライン状態は管理人以外には表示されません。この場合は隠れユーザーとして数えられます。");
$faq[] = array("パスワードが無くなってしまいました。", "無くしたパスワードを取り戻すことはできませんが、パスワードを再発行することができます。パスワードを再発行する場合は、ログイン画面に入って「パスワードを忘れてしまいました」を選択し、登録した名前とメールアドレスを入力して送信します。再発行されたパスワードは、入力したメールアドレスに送信されます。");
$faq[] = array("登録したのにログインすることができません。", "まず最初に正しい名前とパスワードを入力しているかを確認してください。両方とも正しい場合は、次の2つが問題である可能性があります。1つ目は、掲示板がCOPPA（子供のオンライン・プライバシー保護法）の設定を有効にしている場合、13歳未満として登録しているユーザーは与えられた指示に従う必要があります。2つ目は、アカウントをアクティブにしたかを確認してください。掲示板の設定によっては、登録したアカウントのアクティベーションを行わないとアカウントが有効になりません。アクティベーションが必要かどうかは登録完了時に知らされます。アクティブ用のメールが送られているはずなので文章の指示に従ってアクティベーションを行ってください。メールが送信されていない場合は、登録時に正しいメールアドレスを入力したかを確認してください。アカウントのアクティベーション機能が使われている理由の一つとして、無作法なユーザーによる匿名性の乱用等を防ぐということが挙げられます。正しいメールアドレスを入力したにも関わらず登録できない場合は、掲示板の管理者に問い合わせてください。");
$faq[] = array("過去に登録したのにログインできません。", "最も可能性のある理由は、間違った名前とパスワードでログインしようとしているため（登録した時に送信されたメールに載っているアカウントを確認してください）、又は、管理者が何らかの理由であなたのアカウントを削除したためでしょう。後者が当てはまる人は、投稿した経験があるでしょうか？管理者によってはデータベースのサイズを小さくするために、登録してから全く投稿を行わないユーザーのアカウントを削除することがあります。この場合は再び登録をして、積極的に議論に参加しましょう。");


$faq[] = array("--","ユーザー設定");
$faq[] = array("どのようにユーザー設定を変更できますか？", "全ての設定はデータベースに保管されています。ユーザー設定を変更する場合は、通常ページの上のの部分にあるメニューの「ユーザー設定」をクリックしてください。この画面で全てのユーザー設定を変更することができます。");
$faq[] = array("時刻が正しくありません。", "設定しているタイムゾーンによって、時刻が正しく表示されていない場合があります。この場合は、ユーザー設定で時間が合うようにタイムゾーンを設定する必要があります。タイムゾーン等のユーザー設定は登録したユーザーしか行うことができないので注意してください。");
$faq[] = array("タイムゾーン設定を変更しても時刻が正しくありません。", "正しいタイムゾーン設定を行っても時刻が正しくない場合、その問題のほとんどがサマータイムによるものです。掲示板の時刻システムはサマータイムに対応していないので、正しい時刻を表示させたい場合は、タイムゾーン設定を1時間ずらす必要があります。");
$faq[] = array("掲示板の言語に私の使用する言語がありません。", "使用したい言語がない理由は、その言語ファイルが掲示板に導入されていないか、誰も基本言語ファイル（基本言語は英語）をその言語に翻訳していないかのどちらかです。使用したい言語ファイルが存在する場合は、掲示板の管理者に導入してもらいます。もしも使用したい言語ファイルが存在しない場合は、是非とも翻訳して言語ファイルを作ってください。詳細はphpBB Groupのウェブサイトを見てください。");
$faq[] = array("どのように名前の下に画像を表示できますか？", "名前の下に表示される画像は2種類あります。一つは投稿数に応じたランクの画像です。もう一つはユーザー画像です。ユーザー画像は一般的に各ユーザーの好きな画像を選択することができます。掲示板の設定によって定められたユーザー画像しか使えなかったり、一切ユーザー画像が使えない場合があります。ユーザー画像を一切使用できない場合は、どうしてユーザー画像が使用できないかを管理者に問い合わせてください。");
$faq[] = array("どのようにランクを変更できますか？", "基本的にランクを変更することはできません。ほとんどの掲示板は、投稿数に応じたランク、管理者やモデレーター等の特定の権限を持つユーザーのみに表示されるランクを使用しています。ランクを上げるために掲示板に無駄な記事を投稿しないようにしてください。場合によっては、ランクを下げられたり、アカウントを削除される可能性があります。");
$faq[] = array("メールアイコンを使ってユーザーにメールを送信しようとするとログイン画面が表示されます。", "残念ながら掲示板によるメール送信は登録ユーザーしか行うことができません（掲示板によるメール送信機能は掲示板の設定によって無効になっている場合があります）。これは匿名ユーザーによるメールを使った悪質な行為を防ぐためです。");


$faq[] = array("--","投稿に関する問題");
$faq[] = array("どのようにトピックを投稿できますか？", "新規トピックのボタンをクリックすれば投稿することができます。掲示板の設定によっては、記事を投稿するために登録を行っている必要があります。フォーラム画面とトピック画面の右下に自分ができるアクションが表示されます。");
$faq[] = array("どのように記事を削除/編集できますか？", "一般のユーザーは自分の記事の削除/編集しか行えません。編集を行う場合は、編集したい記事の編集ボタンをクリックします。その記事に返信がある場合は、編集後に記事に編集した回数が表示されます。返信のない記事を編集する場合や、モデレーターと管理者が編集する場合は編集回数は表示されません。削除に関しては、一般のユーザーは返信のある記事を削除することができませんので注意してください。");
$faq[] = array("どのように自分の記事にサインを追加できますか？", "サインを追加するためにはユーザー設定を行う必要があります。ユーザー設定画面の「サイン」の欄に追加したいサインを入力して設定します。そして投稿画面で「サインを有効にする」をチェックすれば、自分の記事の本文の一番下にサインを追加することができます。ユーザー設定画面の「サインを常に有効にする」を有効にしていれば、投稿画面の「サインを有効にする」は常にチェックされた状態になります（チェックを外せばサインは追加されません）。");
$faq[] = array("どのように記事に投票を追加できますか？", "投票を追加する場合は、新規トピックを投稿するときに「投票の追加/編集」の欄を使います。ここで投票のお題と選択肢を最低2つ作ります（選択肢を作るときは「選択肢を追加」をクリックしてください）。投票期間を設けることもできますが、特に期間を設けない場合は0に設定してください。ちなみに選択肢の数は制限されています（数の上限は掲示板の設定によります）。");
$faq[] = array("どのように投票の削除/編集を行うことができますか？", "投票の削除/編集は投票を作成したユーザー、モデレーター、管理者しか行うことができません。投票の削除/編集は、記事の編集ボタンをクリックし、投票関連の情報の削除/編集を行います。一票でもはいっている投票の編集/削除は行うことができませんので注意してください。");
$faq[] = array("何故フォーラムにアクセスできないのでしょうか？", "一部のフォーラムは特定のグループやユーザーしか観閲できないように制限がかかっていることがあります。これらのフォーラムを使う権限は、モデレーターと管理人しか与えることができないので、必要に応じて権限を与えてもらうようにしてください。");
$faq[] = array("何故投票が行えないのでしょうか？", "投票の混乱を招くような大量投稿などを防ぐため、登録ユーザーしか投票を行うことはできません。登録ユーザーなのに投票が行えない場合は、適切なアクセス権限が与えられていない可能性があります。");


$faq[] = array("--","フォーマットとトピックの種類");
$faq[] = array("BBCodeとは何でしょうか？", "BBCodeとは特殊なHTMLの実行コードです。BBCodeの使用は管理者によって設定されていますので、設定でBBCodeが無効となっている場合は使うことができません。BBCodeが有効となっている場合でも、ユーザーは投稿画面でBBCodeを無効にすることができます。BBCodeはHTMLと似たスタイルをしていて、タグは&lt; &gt;ではなく[ ]が用いられます。使用するテンプレートによってBBCodeは記事内容投稿欄の上にBBCode用のボタンがあり、これ使うことで直接BBCodeタグを入力することなく挿入することができます。詳細は投稿画面のオプションにある「BBCode」のリンクをクリックしてください。");
$faq[] = array("HTMLを使うことはできますか？", "HTMLを使用できるかは掲示板の設定によって異なります。HTMLの使用が許可されている場合でも、全てのHTMLタグを使えるわけではありません。これは一部のHTMLタグを使用することで表示等において問題が生じてしまうのを防ぐ安全策です。HTMLを使用したくない場合は、投稿画面で「HTMLを無効にする」をチェックしてください。");
$faq[] = array("スマイリーとは何でしょうか？", "スマイリー（別称はエモーションアイコン）とは感情を表現するために用いられる小さな画像のことです。例えば、:) は嬉しい感情、:( は悲しい感情を表します。投稿画面にスマイリー一覧が載っています。投稿画面では複数の記号として表示されますが、記事ではスマイリー画像として表示されます。ただし、スマイリーが多くなると記事が読みづらくなりますので、スマイリーの乱用はしないでください。スマイリーを乱用した記事は、編集/削除/移動対象となる可能性があります。");
$faq[] = array("記事の本文中に画像を載せることはできますか？", "本文中の画像を載せることはできます。しかし、画像を掲示板上にアップロードする機能はありません。そのため、インターネット上に存在する画像を利用する必要があります。サーバーでない限り、自分のコンピューター内にある画像にリンクしても掲示板では表示されません。また、アクセスにパスワード等が必要なサイト内の画像、HotmailやYahooのメールボックス内の画像等も利用できませんので注意してください。画像を表示させるには画像URLを<b>[img][/img]</b>で囲みます（HTMLの使用が許可されている場合はHTMLタグも使用できます）。");
$faq[] = array("重要トピックとは何でしょうか？", "重要トピックは、掲示板利用者であればすぐに読むべき重要な情報が載っているトピックです。重要トピックはフォーラムの各ページの一番上に表示されます。重要トピックに返信を行えるかどうかはユーザーの権限によります。");
$faq[] = array("告知トピックとは何でしょうか？", "告知トピックとは、最初のページの重要トピックの下（重要トピックがない場合は一番上）に表示されるトピックで、比較的重要な情報が含まれています。そのため、告知トピックは読めるときに読んでください。告知トピックに返信を行えるかどうかはユーザーの権限によります。");
$faq[] = array("ロックトピックとは何でしょうか？", "ロックトピックとは返信が禁止されているトピック（投票がある場合は投票も禁止されています）です。様々な理由により、モデレーターや管理者によってトピックがロックされることがあります。");


$faq[] = array("--","ユーザーレベルとグループ");
$faq[] = array("管理者とは何でしょうか？", "管理者とは、掲示板における最高権限を持つ人のことです。管理者は、パーミッション設定、特定のユーザーの掲示板使用の禁止、グループやモデレーターの作成等掲示板における全ての設定と操作を行うことができます。もちろん管理者は、全てのフォーラムにおいて完全なモデレーター権限を持っています。");
$faq[] = array("モデレーターとは何でしょうか？", "モデレーターとは、フォーラムの管理を行う人のことです。モデレーターは、他人の記事の削除/編集/ロック/移動等の権限を持っています。基本的にモデレーターの役割とは、フォーラムの趣旨を外れた投稿、規約に反する投稿などを削除等を行うことで、そのフォーラムの秩序を保つことです。");
$faq[] = array("ユーザーグループとは何でしょうか？", "ユーザーグループとは、管理者がユーザーをグループ分けする方法の一つです。ユーザーグループはグループと呼ぶこともあります。各ユーザーは複数のグループに所属することができて、各グループには個々のアクセス権限が適用されます。これによって管理者は、複数のモデレーターをグループにいれることで管理することが容易になったり、特定のユーザーしか入れないフォーラムを提供することも容易になります。");
$faq[] = array("どのようにグループに参加することができますか？", "グループに参加する場合は、ページの上の部分にある「グループ」をクリックしてください。グループ画面に入ると、全てのグループが表示されます。全てのグループが誰でも参加できるオープングループとは限らず、特定のユーザーしか受け入れないクローズドグループ、メンバーが一切表示されない隠れグループもあります。オープングループの場合は、正しい手順で参加の申請を行ってください。参加の申請がグループのモデレーターに承認されると、晴れてグループのメンバーとなることができます。場合によっては、グループに参加する理由をグループのモデレーターに問われることもあります。何らかの理由で参加の申請を却下された場合は、グループのモデレーターを問い詰めるようなことはしないでください。");
$faq[] = array("どのようにグループのモデレーターになることができますか？", "グループは管理者によって作られるものですが、その際に管理者はグループを管理する人間を任命します。これがグループのモデレーターです。一般的にグループの作成を申請した人がグループのモデレーターとなることが多いようです。新しいグループを作りたい場合は、PM（プライベートメッセージ）等を使って管理者にグループ作成に関して問い合わせてください。");


$faq[] = array("--","PM（プライベートメッセージ）");
$faq[] = array("プライベートメッセージを送信できません。", "3つの理由があると考えられます。1つ目は登録ユーザーでないため、（PMは登録ユーザーしか使用できない機能です）。2つ目はその掲示板でPMの使用が許可されていないため、3つ目は管理者があなたのPMの使用を禁止しているためです。3つ目の場合は、管理者に何故PMの使用を禁止されたかを問い合わせてください。");
$faq[] = array("読みたくないPMを定期的に受信しています。", "次期バージョンでは、プライベートメッセージシステムに無視リスト機能を追加する予定です。現在のバージョンの対策は、管理者に報告して対処してもらうしかありません。");
$faq[] = array("この掲示板のユーザーによって、スパム等が自分のメールアドレスに送信されています。", "まことに残念な出来事です。掲示板にはセーフガード機能があり、誰が掲示板を介してそのようなメールを送ったかを探知できます。今まで受信したスパム等のメールのコピーを管理者に送信してください。管理者に送信するコピーにはヘッダー情報が含まれていることを確認してください。これにより、管理者はこの問題に対処することができます。");

//
// These entries should remain in all languages and for all modifications
//
$faq[] = array("--","phpBB 2関連の情報");
$faq[] = array("phpBB 2を作成したのは誰でしょうか？", "このソフトウェアは<a href=\"http://www.phpbb.com/\" target=\"_blank\">phpBB Group</a>によって作られたもので、著作権はphpBB Groupが有しています。phpBB 2は、GNU 一般公有使用許諾書に定められている条件に従って使用や配布が許諾されています。詳細については、phpBB Groupのサイトを見てください。");
$faq[] = array("必要な機能がありません。", "このソフトウェアの作成を行ったのはphpBB Groupで、著作権はphpBB Groupが有しています。その機能が必要なものだと思う場合は、phpbb.comのサイトを訪れて、php Groupに提案してみてください。新機能の提案・要望は、決してphpbb.comの掲示板には書き込まないでください。新機能等の追加の作業はsourceforgeで行われています。フォラームをよく読み、既に提案しようとしている新機能の追加が決まっているかを確認してから、新機能の提案・要望の手順を行ってください。");
$faq[] = array("この掲示板に関連した不正・法的問題については誰に問い合わせればいいのでしょうか？", "この掲示板の管理者に問い合わせてください。管理者が誰か分からない場合は、モデレーターに管理者が誰なのかを尋ねてみてください。モデレーターから応答がない場合は、ドメインの管理者等に問い合わせてください（whois lookupを使って調べてみてください）。phpBB Groupには、誰が何処でどのようにこの掲示板が使用するかに干渉する権限は全くないということに注意してください。phpBB Groupの方に直接phpbb.comやphpBBのソフトウェアと関わりのない法的問題に関連することを問い合わせても無意味です。第三者によるphpBBの使用に関してphpBB Groupにメールで問い合わせても、回答は簡単なものか全くされないものと考えてください。");

//
// This ends the FAQ entries
//

?>