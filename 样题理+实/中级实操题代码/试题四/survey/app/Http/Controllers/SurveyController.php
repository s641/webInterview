<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SurveyController extends Controller {
	/**
	 * 问卷内容，静态
	 * @var array
	 */
	private static $questions = array(
			"Q1" => array(
					"issue" => "选择你比较熟悉的技术：",
					"type" => "checkbox",
					"options" => array(
							"PHP",
							"Laravel",
							"Restful API",
							"Bootstrap"
					)
			),
			"Q2" => array(
					"issue" => "您会制作简单的网页吗？",
					"type" => "radio",
					"options" => array(
							"会",
							"不会"
					)
			)
	);

	/**
	 * 初始问卷调查数据，并跳转到paper页面
	 * @return \Illuminate\View\View|\Illuminate\Contracts\View\Factory
	 */	
	public function paper() {
		return view("paper", [
				"questions" => self::$questions
		]);
	}

	/**
	 * 处理用户提交的调查问卷
	 * @param Request $request
	 * @return \Illuminate\View\View|\Illuminate\Contracts\View\Factory
	 */
	public function finish(Request $request) {
		$input = $request->all();
		$result = array();
		foreach(self::$questions as $key => $question) {
			if(isset($input[$key])) {
				array_push($result, array(
						"issue" => $question["issue"],
						"answer" => join(",", $input[$key])
				));
			}
		}
		return view("result", [
				"result" => $result
		]);
	}
}
