# waiting
プラグインで拡張可能な承認待ちコンテンツブロックを表示するモジュール

PEAK XOOPS - Support&Experiment <http://xoops.peak.ne.jp/> さんで配布されているモジュールを XOOPS X(ten) ディストリビューションでメンテナンスをしています。

## 以下、元のパッケージに添付されていた README

[xlang:en]

- WAITING MODULE -

This module offers you an extensible waiting contents block into your XOOPS.

The original XOOPS block of "Waiting Contents" works only for official modules,
and is no longer extensible.
It is nonsense to have to do Hack for yourself when you use 3rd party modules.

By installing this module and adding proper plug-ins only,
you as webmaster can confirm any approval waitings of any modules at one view.


NEW FEATURE in 0.8

- plug-ins for waiting can be placed inside module's directory

If you as module developper put your plug-in as modules/(your module)/include/waiting.plugin.php, waiting module will find it.
The plugin in module's directory has higher prioriy than the plugin in waiting's directory.

- multiple waitings can be returned from single function

You can return waitings multiplly with the format as follows:
[code]
array(
  array("adminlink"=>URL",
        "pendingnum"=>NUM,
        "lang_linkname"=>LINKNAME),
  array("adminlink"=>URL",
        "pendingnum"=>NUM,
        "lang_linkname"=>LINKNAME),
  array("adminlink"=>URL",
        "pendingnum"=>NUM,
        "lang_linkname"=>LINKNAME)
)
[/code]

If you'll return just one waiting, this format is also ok.
[code]
  array("adminlink"=>URL",
        "pendingnum"=>NUM,
        "lang_linkname"=>LINKNAME)
[/code]
It will be deprecated functions named b_waiting_(dirname)_X

- modified the template as watings belonging modules

This modification makes that plug-ins need not to return the information of the module. It is enough to display short message like "submitted".



This module is made by Ryuji (http://ryus.co.jp/)
If you can read Japanese, let's visit Ryuji's site!


[/xlang:en]
[xlang:ja]

waitingモジュール

元はRyujiさん作のモジュールでしたが、いつの間にかメンテナンスを引き受けたような形になってます。
http://ryus.co.jp/

*概要
プラグインで拡張可能な承認待ちコンテンツブロック

モジュールを追加するたびに、本体の承認待ちコンテンツブロックに手を入れるのは、あまりにも非効率だと思い始めたので作成しました。


● waiting 0.8 からの新機能

・モジュール内にプラグインを置けるようにした

各モジュール作者さんが、waitingモジュールのプラグインも作成してくれることが多いのと、複製可能モジュールに対応するために、各モジュール内にプラグインを置けるようにしました。

各モジュールのinclude/waiting.plugin.php にプラグインを置き、言語ファイルは、language/LANG/waiting.phpにおきます。

読み込み優先順位は
１．各モジュール内にあるプラグイン
２．waitingモジュール内にあるプラグイン
となってます。

・１つのモジュールで複数の承認待ちを返せるようにした

GIJOEさんのHackにより、b_waiting_MOD_NUMを複数用意することで、複数の承認待ちに対応していましたが、ひとつのfunctionで対応できるようにしました。

プラグインから返すときに、
[code]
array(
  array("adminlink"=>URL",
        "pendingnum"=>NUM,
        "lang_linkname"=>LINKNAME),
  array("adminlink"=>URL",
        "pendingnum"=>NUM,
        "lang_linkname"=>LINKNAME),
  array("adminlink"=>URL",
        "pendingnum"=>NUM,a
        "lang_linkname"=>LINKNAME)
)
[/code]
という形で返ってきたら複数あると判断します。
ひとつしかない場合は、今まで通り
[code]
  array("adminlink"=>URL",
        "pendingnum"=>NUM,
        "lang_linkname"=>LINKNAME)
[/code]
で、OKです。

・ モジュール名の下に各承認待ちが表示されるようにテンプレートを変更した

この改良により、各承認待ちのテキストに、モジュールの情報を含まなくて良くなりました。
例えば、「ダウンロード新規投稿」は「新規投稿」だけでOKです。

[/xlang:ja]




PLUGINS:

-addresses (by gruessle)
-Agenda-X (by GIJOE)
-AMS (by karedokx)
-articles (by twilo)
-catads (by Alain01)
-CBB (by gravies)
-extcal (by alain01)
-MyAds (by Tom_G3X)
-myAlbum-P (by GIJOE) multiple
-mydownloads (by GIJOE)
-mylinks(by GIJOE)
-newbb2 (by gravies)
-news (by GIJOE)
-PDlinks (by flying.tux)
-PDdownloads (by flying.tux)
-piCal (by GIJOE) (>=0.8 has the module side plugin)
-pico (by GIJOE) (D3 module side plugin)
-popnupblog (by dashboard)
-simpleblog (by kousuke)
-smartfaq (by mariuss)
-smartpartner (by mariuss)
-smartsection (by flying.tux)
-system -- comments (by GIJOE)
-tutorials (by GIJOE)
-weblinks (by Tom_G3X)
-WF-downloads (by coldfire, flying.tux)
-WF-links (by flying.tux)
-WF-Sections (by GIJOE)
-WordBook (by AgD)
-WordPress ME (by nobunobu) multiple (>=0.5 has the module side plugin)
-xcGallery (by nao-pon)
-xDirectory (by GIJOE)
-xfguestbook (by karedokx)
-xfsection (by Bezoops)
-xyp4all (by flying.tux)
-yomi search (by nao-pon)
-eguide (by tes)





CHANGES:

ver 0.95|
- added D3 module ready
- added french (thx marco)
- added portuguesebr (thx Izzy)
- added persian (thx stranger) 0.95a
- a plugin added
-- eguide (by tes) 0.95b
- languge files added
-- ja_utf8 0.95c

ver 0.94b|
- modified the module icon (thx Argon)
- 2 pugins added
-- extcal (thx alain01)
-- articles (thx twilo)

ver 0.94a|
- fixed a typo in plugins/yomi.php (thx yshima)

:ver 0.94|
- removed CRs in some php files
- a plugin added
-- XFSection (thx Bezoops)

:ver 0.93|
- updated Italian (thx flying.tux)
- a plugin added
-- SmartPartner (thx mariuss)

:ver 0.92|
- add SQL cache
- fixed some typos (thx karedokx)
- 2 plugin modified
-- WF-Section (thx karedokx)
-- catads (thx Alain01)
- 2 plugins added
-- WordBook (thx AgD)
-- recette (thx karedokx)

:ver 0.91|
- updated Italian (thx flying.tux)

:ver 0.90|
- modified the structure of the directory for plugins
- modified system plugin (thx gravies)
- 3 plugins added
-- newbb2 or CBB (thx gravies)
-- catads (thx Alain01)
-- WF-links (thx flying.tux)

:ver 0.86| by flying.tux
- Italian updated
- 2 plug-ins added
-- PDlinks (thx flying.tux)
-- PDdownloads (thx flying.tux)

:ver 0.85| by GIJOE
- modified the dependencies of language files and constants radically

:ver 0.84| by GIJOE
- fixed a typo in the form for block's options (thx flying.tux)
- fixed some Notices in "not always" mode
- 2 plug-ins added
-- xfguestbook (thx karedokx) (0.84a)
-- AMS (thx karedokx) (0.84a)
- a plug-in modified
-- weblinks (thx Tom_G3X) (0.84b)

:ver 0.83| by GIJOE
- fixed missing a Creteria in getList()

:ver 0.82| by flying.tux
- few modifications in English
- few modifications in Italian
- 1 plug-in added
-- smartsection(thx flying.tux)

:ver 0.81| by GIJOE
- changed the route to admin (from block's option edit)
- modified English
- added some protections against direct accessing
- Italian added(thx flying.tux)
- 1 plug-in added
-- xyp4all(thx flying.tux)

:ver 0.8|
-- modified as reading plug-in from module's directory if it exists
-- multiple waitings can be returned from single function
--- almost plug-ins are modified along this new spec by GIJOE
-- modified the template as watings belonging modules
--- English and Japanese text are shorten by GIJOE
- 1 plug-in added
-- Weblinks(by Ryuji)

:ver 0.7c|
-- 1 plug-in added
--- WordPress ME(by nobunobu) multiple

:ver 0.7b|
-- 1 plug-in added
--- SmartFAQ (by mariuss)

:ver 0.7a|
-- 1 plug-in added
--- WF-Downloads (by coldfire)

:ver 0.7|
-- 2 language files added
--- spanish (by ColdBeer)
--- swedish (by Leif Madsen)
-- 1 plug-in added
--- xcGallery (by nao-pon)

:ver 0.6|
-- An option added whether it is displayed when no wating exists
-- 3 plug-ins added
--- Addresses (by gruessle)
--- MyAds (by Tom_G3X)
--- Tutorials (by GIJOE)

:ver 0.5|
-- some plug-ins added
-- English document file - is this - added.


