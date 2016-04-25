function create_menu(basepath)
{
	var base = (basepath == 'null') ? '' : basepath;

	document.write(
		'<table cellpadding="0" cellspaceing="0" border="0" style="width:98%"><tr>' +
		'<td class="td" valign="top">' +

		'<ul>' +
		'<li><a href="http://codeigniter-kr.org/user_guide_2.1.0/index.html">사용자 가이드 홈 </a></li>' +
		'<li><a href="http://codeigniter-kr.org/user_guide_2.1.0/toc.html">목차페이지로 </a></li>' +
		'</ul>' +

		'<h3>기본 정보</h3>' +
		'<ul>' +
			'<li><a href="http://codeigniter-kr.org/user_guide_2.1.0/general/requirements.html">서버 요구사항 </a></li>' +
			'<li><a href="http://codeigniter-kr.org/user_guide_2.1.0/license.html">라이센스</a></li>' +
			'<li><a href="http://codeigniter-kr.org/user_guide_2.1.0/changelog.html">변경내역</a></li>' +
			'<li><a href="http://codeigniter-kr.org/user_guide_2.1.0/general/credits.html">명예 Credits</a></li>' +
		'</ul>' +

		'<h3>설치하기</h3>' +
		'<ul>' +
			'<li><a href="http://codeigniter-kr.org/user_guide_2.1.0/installation/downloads.html">CodeIgniter 다운로드 하기 </a></li>' +
			'<li><a href="http://codeigniter-kr.org/user_guide_2.1.0/installation/index.html">설치 절차 </a></li>' +
			'<li><a href="http://codeigniter-kr.org/user_guide_2.1.0/installation/upgrading.html">업그레이드 방법 </a></li>' +
			'<li><a href="http://codeigniter-kr.org/user_guide_2.1.0/installation/troubleshooting.html">문제해결 </a></li>' +
		'</ul>' +

		'<h3>CI 소개</h3>' +
		'<ul>' +
			'<li><a href="http://codeigniter-kr.org/user_guide_2.1.0/overview/getting_started.html">시작하기 </a></li>' +
			'<li><a href="http://codeigniter-kr.org/user_guide_2.1.0/overview/at_a_glance.html">CodeIgniter 한눈에 둘러보기 </a></li>' +
			'<li><a href="http://codeigniter-kr.org/user_guide_2.1.0/overview/features.html">제공하는 기능목록 </a></li>' +
			'<li><a href="http://codeigniter-kr.org/user_guide_2.1.0/overview/appflow.html">CI 동작 개념도 </a></li>' +
			'<li><a href="http://codeigniter-kr.org/user_guide_2.1.0/overview/mvc.html">모델뷰컨트롤러Model-View-Controller</a></li>' +
			'<li><a href="http://codeigniter-kr.org/user_guide_2.1.0/overview/goals.html">설계의 목적 </a></li>' +
		'</ul> <font color=white> <br>번역-한국 CI 사용자 그룹</font>' +
	'<h3>Tutorial(미번역)</h3>' +
		'<ul>' +
			'<li><a href="http://codeigniter-kr.org/user_guide_2.1.0/tutorial/index.html">Introduction</a></li>' +
			'<li><a href="http://codeigniter-kr.org/user_guide_2.1.0/tutorial/static_pages.html">Static pages</a></li>' +
			'<li><a href="http://codeigniter-kr.org/user_guide_2.1.0/tutorial/news_section.html">News section</a></li>' +
			'<li><a href="http://codeigniter-kr.org/user_guide_2.1.0/tutorial/create_news_items.html">Create news items</a></li>' +
			'<li><a href="http://codeigniter-kr.org/user_guide_2.1.0/tutorial/conclusion.html">Conclusion</a></li>' +
		'</ul>' +

		'</td><td class="td_sep" valign="top">' +

		'<h3>일반 토픽</h3>' +
		'<ul>' +
			'<li><a href="http://codeigniter-kr.org/user_guide_2.1.0/general/urls.html">CI 에서의 URL 규칙 </a></li>' +
			'<li><a href="http://codeigniter-kr.org/user_guide_2.1.0/general/controllers.html">컨트롤러(Controllers) </a></li>' +
			'<li><a href="http://codeigniter-kr.org/user_guide_2.1.0/general/reserved_names.html">CI 예약어 목록 </a></li>' +
			'<li><a href="http://codeigniter-kr.org/user_guide_2.1.0/general/views.html">뷰(Views) </a></li>' +
			'<li><a href="http://codeigniter-kr.org/user_guide_2.1.0/general/models.html">모델(Models) </a></li>' +
			'<li><a href="http://codeigniter-kr.org/user_guide_2.1.0/general/helpers.html">헬퍼(Helpers) </a></li>' +
			'<li><a href="http://codeigniter-kr.org/user_guide_2.1.0/general/libraries.html">CI 라이브러리 사용하기 </a></li>' +
			'<li><a href="http://codeigniter-kr.org/user_guide_2.1.0/general/creating_libraries.html">나만의 라이브러리 만들기 </a></li>' +
			'<li><a href="http://codeigniter-kr.org/user_guide_2.1.0/general/drivers.html">드라이버 사용</a></li>' +
			'<li><a href="http://codeigniter-kr.org/user_guide_2.1.0/general/creating_drivers.html">드라이버 만들기</a></li>' +
			'<li><a href="http://codeigniter-kr.org/user_guide_2.1.0/general/core_classes.html">나만의 코어클래스 만들기 </a></li>' +
			'<li><a href="http://codeigniter-kr.org/user_guide_2.1.0/general/hooks.html">후킹-프레임워크 코어 확장  </a></li>' +
			'<li><a href="http://codeigniter-kr.org/user_guide_2.1.0/general/autoloader.html">리소스 자동로딩  </a></li>' +
			'<li><a href="http://codeigniter-kr.org/user_guide_2.1.0/general/common_functions.html">일반함수들 </a></li>' +
			'<li><a href="http://codeigniter-kr.org/user_guide_2.1.0/general/routing.html">URI 규칙 </a></li>' +
			'<li><a href="http://codeigniter-kr.org/user_guide_2.1.0/general/errors.html">에러 핸들링 </a></li>' +
			'<li><a href="http://codeigniter-kr.org/user_guide_2.1.0/general/caching.html">캐싱 </a></li>' +
			'<li><a href="http://codeigniter-kr.org/user_guide_2.1.0/general/profiling.html">프로파일링(성능측정) </a></li>' +
	'<li><a href="http://codeigniter-kr.org/user_guide_2.1.0/general/cli.html"> CLI 에서 동작시키기</a></li>' +
		'<li><a href="http://codeigniter-kr.org/user_guide_2.1.0/general/managing_apps.html">프로그램관리법(변경,이동등)</a></li>' +
				'<li><a href="http://codeigniter-kr.org/user_guide_2.1.0/general/environments.html">여러환경 관리</a></li>' +
			'<li><a href="http://codeigniter-kr.org/user_guide_2.1.0/general/alternative_php.html">PHP 문법을 CI 문법으로 대체 </a></li>' +
			'<li><a href="http://codeigniter-kr.org/user_guide_2.1.0/general/security.html">보안</a></li>' +
			'<li><a href="http://codeigniter-kr.org/user_guide_2.1.0/doc_style/index.html">문서 작성하기</a></li>' +
		'</ul>' +
			'<h3>추가 리소스</h3>' +
		'<ul>' +
		'<li><a href="http://codeigniter.com/forums/">Community Forums</a></li>' +
		'<li><a href="http://codeigniter.com/wiki/">Community Wiki</a></li>' +
		'</ul>' +
		'</td><td class="td_sep" valign="top">' +


		'<h3>클래스 레퍼런스</h3>' +
		'<ul>' +
		'<li><a href="http://codeigniter-kr.org/user_guide_2.1.0/libraries/benchmark.html">벤치마크 (Benchmarking) </a></li>' +
		'<li><a href="http://codeigniter-kr.org/user_guide_2.1.0/libraries/cart.html">장바구니 (Cart) </a></li>' +
		'<li><a href="http://codeigniter-kr.org/user_guide_2.1.0/libraries/calendar.html">캘린더 (Calendaring) </a></li>' +
		'<li><a href="http://codeigniter-kr.org/user_guide_2.1.0/libraries/config.html">환경설정클래스(Config class) </a></li>' +

		'<li><a href="http://codeigniter-kr.org/user_guide_2.1.0/libraries/email.html">이메일(Email)</a></li>' +
		'<li><a href="http://codeigniter-kr.org/user_guide_2.1.0/libraries/encryption.html">암호화(Encryption)</a></li>' +
		'<li><a href="http://codeigniter-kr.org/user_guide_2.1.0/libraries/file_uploading.html">파일업로드</a></li>' +
		'<li><a href="http://codeigniter-kr.org/user_guide_2.1.0/libraries/form_validation.html">폼검증(Form Validation)</a></li>' +
		'<li><a href="http://codeigniter-kr.org/user_guide_2.1.0/libraries/ftp.html">FTP </a></li>' +
		'<li><a href="http://codeigniter-kr.org/user_guide_2.1.0/libraries/table.html">HTML 테이블</a></li>' +
		'<li><a href="http://codeigniter-kr.org/user_guide_2.1.0/libraries/image_lib.html">이미지(Image Manipulation)</a></li>' +
	'<li><a href="http://codeigniter-kr.org/user_guide_2.1.0/libraries/input.html">입력 클래스 </a></li>' +
		'<li><a href="http://codeigniter-kr.org/user_guide_2.1.0/libraries/javascript.html">Javascript 클래스</a></li>' +
		'<li><a href="http://codeigniter-kr.org/user_guide_2.1.0/libraries/loader.html">로더(Loader)</a></li>' +
		'<li><a href="http://codeigniter-kr.org/user_guide_2.1.0/libraries/language.html">언어(Language)</a></li>' +
			'<li><a href="http://codeigniter-kr.org/user_guide_2.1.0/libraries/migration.html">마이그레이션</a></li>' +
		'<li><a href="http://codeigniter-kr.org/user_guide_2.1.0/libraries/output.html">출력(Output)</a></li>' +
		'<li><a href="http://codeigniter-kr.org/user_guide_2.1.0/libraries/pagination.html">페이지네이션(Pagination)</a></li>' +
	'<li><a href="http://codeigniter-kr.org/user_guide_2.1.0/libraries/security.html">보안클래스</a></li>' +
		'<li><a href="http://codeigniter-kr.org/user_guide_2.1.0/libraries/sessions.html">세션(Session)</a></li>' +
		'<li><a href="http://codeigniter-kr.org/user_guide_2.1.0/libraries/trackback.html">트랙백(Trackback)</a></li>' +
		'<li><a href="http://codeigniter-kr.org/user_guide_2.1.0/libraries/parser.html">템플릿파서(Template Parser)</a></li>' +
		'<li><a href="http://codeigniter-kr.org/user_guide_2.1.0/libraries/typography.html">문자(타이포그라피:Typography)</a></li>' +
		'<li><a href="http://codeigniter-kr.org/user_guide_2.1.0/libraries/unit_testing.html">단위테스트(Unit Testing)</a></li>' +
		'<li><a href="http://codeigniter-kr.org/user_guide_2.1.0/libraries/uri.html">URI</a></li>' +
		'<li><a href="http://codeigniter-kr.org/user_guide_2.1.0/libraries/user_agent.html">User Agent </a></li>' +
		'<li><a href="http://codeigniter-kr.org/user_guide_2.1.0/libraries/xmlrpc.html">XML-RPC</a></li>' +
		'<li><a href="http://codeigniter-kr.org/user_guide_2.1.0/libraries/zip.html">Zip 압축</a></li>' +
		'</ul>' +

		'</td><td class="td_sep" valign="top">' +

	'<h3>드라이버 레퍼런스</h3>' +
		'<ul>' +
		'<li><a href="http://codeigniter-kr.org/user_guide_2.1.0/libraries/caching.html">캐싱 클래스</a></li>' +
		'<li><a href="http://codeigniter-kr.org/user_guide_2.1.0/database/index.html">데이터베이스 클래스 </a></li>' +
		'<li><a href="http://codeigniter-kr.org/user_guide_2.1.0/libraries/javascript.html">Javascript 클래스</a></li>' +
		'</ul>' +

		'<h3>헬퍼 레퍼런스</h3>' +
		'<ul>' +
		'<li><a href="http://codeigniter-kr.org/user_guide_2.1.0/helpers/array_helper.html">배열(Array)</a></li>' +
		'<li><a href="http://codeigniter-kr.org/user_guide_2.1.0/helpers/captcha_helper.html">CAPTCHA 헬퍼</a></li>' +
		'<li><a href="http://codeigniter-kr.org/user_guide_2.1.0/helpers/cookie_helper.html">쿠키(Cookie)</a></li>' +
		'<li><a href="http://codeigniter-kr.org/user_guide_2.1.0/helpers/date_helper.html">날짜(Date)</a></li>' +
		'<li><a href="http://codeigniter-kr.org/user_guide_2.1.0/helpers/directory_helper.html">디렉토리(Directory)</a></li>' +
		'<li><a href="http://codeigniter-kr.org/user_guide_2.1.0/helpers/download_helper.html">다운로드(Download)</a></li>' +
		'<li><a href="http://codeigniter-kr.org/user_guide_2.1.0/helpers/email_helper.html">이메일(Email)</a></li>' +
		'<li><a href="http://codeigniter-kr.org/user_guide_2.1.0/helpers/file_helper.html">파일(File)</a></li>' +
		'<li><a href="http://codeigniter-kr.org/user_guide_2.1.0/helpers/form_helper.html">폼(Form)</a></li>' +
		'<li><a href="http://codeigniter-kr.org/user_guide_2.1.0/helpers/html_helper.html">HTML</a></li>' +
		'<li><a href="http://codeigniter-kr.org/user_guide_2.1.0/helpers/inflector_helper.html">인플렉터(어형변화)</a></li>' +
		'<li><a href="http://codeigniter-kr.org/user_guide_2.1.0/helpers/language_helper.html">언어(Language)</a></li>' +
		'<li><a href="http://codeigniter-kr.org/user_guide_2.1.0/helpers/number_helper.html">숫자(Number)</a></li>' +
		'<li><a href="http://codeigniter-kr.org/user_guide_2.1.0/helpers/path_helper.html">경로(Path)</a></li>' +
		'<li><a href="http://codeigniter-kr.org/user_guide_2.1.0/helpers/security_helper.html">보안(Security)</a></li>' +
		'<li><a href="http://codeigniter-kr.org/user_guide_2.1.0/helpers/smiley_helper.html">스마일리(Smiley)</a></li>' +
		'<li><a href="http://codeigniter-kr.org/user_guide_2.1.0/helpers/string_helper.html">문자열(String)</a></li>' +
		'<li><a href="http://codeigniter-kr.org/user_guide_2.1.0/helpers/text_helper.html">텍스트처리(Text)</a></li>' +
		'<li><a href="http://codeigniter-kr.org/user_guide_2.1.0/helpers/typography_helper.html">타이포그라피(Typography)</a></li>' +
		'<li><a href="http://codeigniter-kr.org/user_guide_2.1.0/helpers/url_helper.html">URL</a></li>' +
		'<li><a href="http://codeigniter-kr.org/user_guide_2.1.0/helpers/xml_helper.html">XML</a></li>' +
		'</ul>' +




		'</td></tr></table>');
}
