<?php

namespace App\Http\Controllers;

use App\Album;
use Asymptix\HtmlDomParser\HtmlDomParser;
use Illuminate\Support\Facades\Request;
use Laravel\Lumen\Routing\Controller as BaseController;

class IndexController extends BaseController
{
    private $albumUrl = "";

    public function __construct()
    {
        $this->albumUrl = (env("APP_ENV") == "production")? "http://albums.motorgraph.com" : "http://albums.motorgraph.local";
    }

    public function index(HtmlDomParser $dom)
    {
        $perPage = 24;

        // 리스트 데이터
        $albums = Album::with('Photos')
            ->orderBy('created_at', 'desc')
            ->paginate($perPage);

        /*// ND사이트 헤더,풋터,사이드바
        $url = "http://www.motorgraph.com/news/articleList.html";
        //$html->loadUrl($url);
        $html = file_get_contents($url);
        $html = iconv("euc-kr", "utf-8", $html);
        $html = str_replace('src="./', 'src="/news/', $html);
        $html = str_replace('src="', 'src="http://www.motorgraph.com', $html);
        $html = str_replace('href="', 'href="http://www.motorgraph.com', $html);
        $html = str_replace('http://www.motorgraph.comhttp', 'http', $html);
        // 설문조사 한글 깨져서 필터링
        $html = preg_replace('/src="http:\/\/www.motorgraph.com\/poll\/autobox\/livepoll_\d+.htm/', 'src="', $html);

        // DOM 로딩
        $dom->load($html);

        // 본문 섹션
        $section = $dom->find('.body-wrap-basic table', 0)->find('table', 0)->find('table', 0);
        $sectionHeader = $section->find('td', 0);
        $sectionTitle = $sectionHeader->find('div > span', 0);
        $sectionDescription = $sectionHeader->find('div > span', 1);
        $sectionStats = $sectionHeader->find('table', 0);

        $sectionTitle->innertext = "화보";
        $sectionStats->outertext = '';
        $sectionHeader->find('div', 0)->style = 'padding-bottom: 1em; border-bottom: 1px solid #d0d0d0';
        $section->find('tr', 2)->outertext = '';

        // 페이지 링크 필터링
        $dom->find('.body-wrap-basic table', 0)->find('td', 0)->last_child()->outertext = '';

        // 리스트들 필터링
        $i = 0;
        foreach($section->find('tr') as $tr) {
            if ($i >= 4) {
                $tr->outertext = '';
            }
            ++$i;
        }

        $listHtml = '';

        $listStyles = "<style>
        .thumbnails { margin-right: -3px; }
        .thumbnails .item { float: left; width: 33.1%; margin-right: 1px; margin-bottom: 1.5em; }
        .thumbnails .thumbnail { display: block; }
        .thumbnails .thumbnail > img { width: 100%; }
        .thumbnails .thumbnail .caption { text-align: center; }
        </style>";

        // 홈 데이터로 본문 리스팅 부분 치환
        $article = $dom->find('.body-wrap-basic table', 0)->find('td', 0);
        $article->innertext = $listStyles . $article->find('td', 0)->innertext . $listHtml;

        return $dom;
        */

        $page = Request::get('page');

        if (isset($page) && $page > 1) {
            return view('partials.index', ['albums' => $albums]);
        } else {
            return view('index', ['albums' => $albums]);
        }
    }

    public function show($id)
    {
        $album = Album::with('Photos')->find($id);
        $album->url = $this->albumUrl;
        $album->files = $album->Photos->sortBy('order');
        $tags = $album->tags;

        return view('show', [
            'album' => $album,
            'tags' => $tags
        ]);
    }
}
