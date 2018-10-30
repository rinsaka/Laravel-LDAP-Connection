<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;

class CommentsController extends Controller
{
  public function index()
  {

    $host = 'ldap://192.168.33.110';
    // $port = 389;

    $dc = 'dc=example,dc=com';
    // $dn = 'uid=testuser01,ou=Users,dc=example,dc=com';
    // $userPass = 'hogehoge.01';

    // $ldapConn = ldap_connect($host, $port);
    $ldapConn = ldap_connect($host);

    if ($ldapConn) {
      var_dump("接続できました");
      $ldap_search = ldap_search($ldapConn, $dc, "uid=*");
      $entries = ldap_get_entries($ldapConn, $ldap_search);
      if($entries) {
        $i = 0;
        foreach($entries as $entry) {
          if($i>0) {
            // dd($entry, $entry['uid'][0], $entry['cn'][0], $entry['uidnumber'][0]);
            foreach($entry as $item) {
              var_dump($item[0]);
            }
            // var_dump($entry);
          }
          $i++;
        }
        // dd($entries);

      }
    } else {
      var_dump("接続失敗");
    }

    ldap_close($ldapConn);


    $comments = Comment::get();
    // dd($comments);
    return view('comments.index')
            ->with('comments', $comments);
  }

  public function user01()
  {
    $host = 'ldap://192.168.33.110';
    // $port = 389;

    $dc = 'dc=example,dc=com';
    $dn = 'uid=testuser01,ou=Users,dc=example,dc=com';
    $userPass = 'hogehoge.01';

    // $ldapConn = ldap_connect($host, $port);
    $ldapConn = ldap_connect($host);

    ldap_set_option( $ldapConn, LDAP_OPT_PROTOCOL_VERSION, 3);
    ldap_set_option( $ldapConn, LDAP_OPT_REFERRALS, 0);

    if ($ldapConn) {
      var_dump("接続できました");

      // http://php-japan.10936.n7.nabble.com/PHP-users-29618-LDAP-Warning-td3740.html
      // @ を付けたらエラーが表示されなくなる
      $bind = @ldap_bind($ldapConn, $dn, $userPass);

      if ($bind) {
        var_dump('ログイン成功');
      } else {
        var_dump('ログイン失敗');
      }



    } else {
      var_dump("接続失敗");
    }

    ldap_close($ldapConn);

  }
}
