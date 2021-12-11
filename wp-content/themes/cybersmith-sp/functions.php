<?php

function matterDetail($atts){
	$atts = shortcode_atts(array(
				'number' => 0
			), 
			$atts,
			'matter_detail'//ショートコード名。省略可能だが含めるのが推奨
		);
	extract($atts);	//連想配列のキーから同名の変数を作成し、値も代入する
	
// 	require_once("../../../../wp-load.php");
	global $wpdb;
	$rows = $wpdb->get_row("SELECT * FROM $wpdb->matter_detail WHERE id=$number", ARRAY_A);
// 	if(empty($rows)){
// 		echo "<br> 接続失敗 <br>";
// 	}else{
// 		echo "<br> 接続成功 <br>";
// 	}
	
	$msg = "<div style=\"margin: 1.2vw 13.2vw; border-radius: 0.5vw; border: 0.15vw solid #e4e4e4; font-family: HiraKakuProN-W3-83pv-RKSJ-H, Hiragino Kaku Gothic ProN; letter-spacing: 0.1em;\">
    <div style=\"margin: 1.5vw 2vw 1.5vw 2.7vw;\">
        <div style=\"display: flex; justify-content: space-between; padding: 0.5vw 0vw;\">
            <div style=\"font-size: 1.31vw;display: flex;align-items: center;\">
                <img width=\"8%\" src=\"http://3.112.250.183/wp-content/uploads/2021/12/new-02.svg\" style=\"margin-right: 0.8vw;\">
                <div>{$rows["タイトル"]}</div>
            </div>
            <p></p>
            <div style=\"font-size: 0.88vw;color: #979797; letter-spacing: 0.1em;\">案件 #${number} 公開日: {$rows["公開日"]}</div>
        </div>
        <div style=\"display: inline-flex;width: 100%;padding: 0.5vw 0vw;\">
            <div style=\"padding: 0.5vw 0vw;font-size: 1.1vw;width: 50%;\" flex-grow=\"1\"><span style=\"background-color: #e4e4e4;margin-right: 0.8vw;padding: 1vw 0.5vw;border-radius: 0.5vw;\">業種　　　</span>{$rows["業種"]}</div>
            <div style=\"font-size: 1.1vw;width: 50%;padding: 0.5vw 0vw;\" flex-grow=\"1\">
                <span style=\"background-color: #e4e4e4; margin-right: 0.8vw; padding: 1vw 0.5vw;border-radius: 0.5vw;\">勤務地　　</span>{$rows["勤務地"]}
            </div>
        </div>
        <div style=\"display: inline-flex;width: 100%;padding: 0.5vw 0vw;\">
			    <div style=\"padding: 0.5vw 0vw;font-size: 1.1vw;width: 50%;\" flex-grow=\"1\">
                <span style=\"background-color: #e4e4e4;margin-right: 0.4vw;padding: 1vw 0.5vw;border-radius: 0.5vw;\">報酬　　　</span>
				     <span style=\"color: #bf272d; font-size: 1.31vw;\">{$rows["報酬"]}</span>
					  <span style=\"font-size: 0.6vw; margin-left: 2vw\">(税別)</span>
            </div>
            <div style=\"font-size: 1.1vw;width: 50%;padding: 0.5vw 0vw;\" flex-grow=\"1\">
                <span style=\"background-color: #e4e4e4; margin-right: 0.8vw; padding: 1vw 0.5vw;border-radius: 0.5vw;\">稼働率　　</span>{$rows["稼働率"]}
            </div>
        </div>
        <div style=\"display: inline-flex;width: 100%;padding: 0.5vw 0vw;\">
            <div style=\"padding: 0.5vw 0vw;font-size: 1.1vw;width: 50%;\" flex-grow=\"1\">
                <span style=\"background-color: #e4e4e4;margin-right: 0.8vw;padding: 1vw 0.5vw;border-radius: 0.5vw;\">期間　　　</span>{$rows["期間"]}
            </div>
            <div style=\"font-size: 1.1vw;width: 50%;padding: 0.5vw 0vw;\" flex-grow=\"1\">
                <span style=\"background-color: #e4e4e4; margin-right: 0.8vw; padding: 1vw 0.5vw;border-radius: 0.5vw;\">募集人数　</span>{$rows["募集人数"]}
            </div>
        </div>
		  <div style=\"display: inline-flex;width: 100%;padding: 0.25vw 0vw;\">
            <div style=\"padding: 0vw 0vw;font-size: 1.1vw;width: 100%;display: flex;align-items: flex-start;\" flex-grow=\"1\">
                <span style=\"background-color: #e4e4e4;margin-right: 0.8vw;padding: 1vw 0.5vw;border-radius: 0.5vw;\">スキル　　</span>
				     <div style=\"width: 90%; line-height: 1.7;\">{$rows["スキル"]}</div>
				</div>
        </div>
        <div style=\"display: inline-flex;width: 100%;padding: 0.5vw 0vw;\">
            <div style=\"padding: 0.5vw 0vw;font-size: 1.1vw;width: 50%;\" flex-grow=\"1\">
                <span style=\"background-color: #e4e4e4;margin-right: 0.8vw;padding: 1vw 0.5vw;border-radius: 0.5vw;\">ポジション</span>{$rows["ポジション"]}
            </div>
        </div>
        <div style=\"display: inline-flex;width: 100%;padding: 0.5vw 0vw;\">
            <div style=\"padding: 0.5vw 0vw;font-size: 1.1vw;width: 50%;\" flex-grow=\"1\">
                <span style=\"background-color: #e4e4e4;margin-right: 0.8vw;padding: 1vw 0.5vw;border-radius: 0.5vw;\">雇用形態　</span>{$rows["雇用形態"]}
            </div>
        </div>
        <div style=\"display: inline-flex;width: 100%;padding: 0.5vw 0vw;\">
            <div style=\"padding: 0.5vw 0vw;font-size: 1.1vw;width: 50%;\" flex-grow=\"1\">
                <span style=\"background-color: #e4e4e4;margin-right: 0.8vw;padding: 1vw 0.5vw;border-radius: 0.5vw;\">年齢　　　</span>{$rows["年齢"]}
            </div>
        </div>
    </div>
	 <div style=\"text-align: center;margin: 2vw 0;\"><img width=\"56%\" src=\"http://3.112.250.183/wp-content/uploads/2021/11/SNS.png\"></div>
</div>";
	return $msg;
}

function matterOverview($atts){
	$atts = shortcode_atts(array(
				'number' => 0
			), 
			$atts,
			'matter_overview'//ショートコード名。省略可能だが含めるのが推奨
		);
	extract($atts);	//連想配列のキーから同名の変数を作成し、値も代入する
	
// 	require_once("../../../../wp-load.php");
	global $wpdb;
	$rows = $wpdb->get_row("SELECT * FROM $wpdb->matter_detail WHERE id=$number", ARRAY_A);
// 	if(empty($rows)){
// 		echo "<br> 接続失敗 <br>";
// 	}else{
// 		echo "<br> 接続成功 <br>";
// 	}
	
	$msg = "<div style=\"margin: 1.2vw 13.2vw; border-radius: 0.5vw; border: 0.15vw solid #e4e4e4; font-family: HiraKakuProN-W3-83pv-RKSJ-H, Hiragino Kaku Gothic ProN; letter-spacing: 0.1em;\">
    <div style=\"margin: 1.5vw 2vw 1.5vw 2.7vw;\">
        <div style=\"display: flex; justify-content: space-between; padding: 0.5vw 0vw;\">
            <div style=\"font-size: 1.31vw;display: flex;align-items: center;\">
                <img width=\"8%\" src=\"http://3.112.250.183/wp-content/uploads/2021/12/new-02.svg\" style=\"margin-right: 0.8vw;\">
                <div>{$rows["タイトル"]}</div>
            </div>
            <p></p>
            <div style=\"font-size: 0.88vw;color: #979797; letter-spacing: 0.1em;\">案件 #${number} 公開日: {$rows["公開日"]}</div>
        </div>
        <div style=\"display: inline-flex;width: 100%;padding: 0.5vw 0vw;\">
            <div style=\"padding: 0.5vw 0vw;font-size: 1.1vw;width: 40%;\" flex-grow=\"1\">
                <div>
                    <span style=\"background-color: #e4e4e4;margin-right: 0.8vw;padding: 1vw 0.5vw;border-radius: 0.5vw;\">業種　　　</span>{$rows["業種"]}
                </div>
			    	 <div style=\"margin: 2vw 0;\">
                    <span style=\"background-color: #e4e4e4;margin-right: 0.4vw;padding: 1vw 0.5vw;border-radius: 0.5vw;\">報酬　　　</span>
                    <span style=\"color: #bf272d; font-size: 1.31vw;\">{$rows["報酬"]}</span>
                    <span style=\"font-size: 0.6vw; margin-left: 0.5vw\">(税別)</span>
                </div>
                <div>
                    <span style=\"background-color: #e4e4e4;margin-right: 0.8vw;padding: 1vw 0.5vw;border-radius: 0.5vw;\">期間　　　</span>{$rows["期間"]}
                </div>
            </div>
            <div style=\"padding: 0vw 0vw;font-size: 1.1vw;width: 60%;display: flex;align-items: flex-start;\" flex-grow=\"1\">
                <span style=\"background-color: #e4e4e4;margin-right: 0.8vw;padding: 1vw 0.5vw;border-radius: 0.5vw;\">スキル　　</span>
                <div style=\"line-height: 1.7; font-size: 0.96vw;\">{$rows["スキル"]}</div>
            </div>
        </div>
    </div>
	<a href=\"/2021/11/28/案件情報_詳細/\"><div style=\"text-align: center; margin: 2vw 0;\"><button type=\"submit\" name=\"submit\" value=\"submit\" style=\"    width: 29.2vw; height: 4.3vw; font-size: 1.17vw; letter-spacing: 0.3em; color: #546363; border-color: #83ccd2; border-width: 0.4vw; background-color: white; border-radius: 2.2vw; position: relative;\">案件の詳細を見る・応募する<img src=\"http://3.112.250.183/wp-content/uploads/2021/12/icon_circle_next_sky.svg\" style=\"position: absolute; top: 50%;right: 1.17vw; width: 1.5vw; transform: translateY(-50%);\"></button></div></a>

</div>";
	return $msg;
}

function matterOverviewSp($atts){
	$atts = shortcode_atts(array(
				'number' => 0
			), 
			$atts,
			'matter_overview_sp'//ショートコード名。省略可能だが含めるのが推奨
		);
	extract($atts);	//連想配列のキーから同名の変数を作成し、値も代入する
	
// 	require_once("../../../../wp-load.php");
	global $wpdb;
	$rows = $wpdb->get_row("SELECT * FROM $wpdb->matter_detail WHERE id=$number", ARRAY_A);
// 	if(empty($rows)){
// 		echo "<br> 接続失敗 <br>";
// 	}else{
// 		echo "<br> 接続成功 <br>";
// 	}
	
	$msg = "<div style=\"margin: 1.2vw 6.1vw; border-radius: 0.5vw; border: 0.15vw solid #e4e4e4; font-family: HiraKakuProN-W3-83pv-RKSJ-H, Hiragino Kaku Gothic ProN; letter-spacing: 0.1em;\">
    <div style=\"margin: 3.4vw 2.7vw;\">
        <div style=\"display: flex; justify-content: space-between; padding: 0.5vw 0vw;\">
            <div style=\"font-size: 4.26vw;display: flex;align-items: center;\">
                <img src=\"http://3.112.250.183/wp-content/uploads/2021/12/new-02.svg\" style=\"margin-right: 3vw;width: 12vw;\">
                <div>SAP(BASIS)システム構築支援</div>
            </div>
            
            
        </div>
        <div style=\"font-size: 3.2vw;color: #979797;letter-spacing: 0.1em;margin: 2vw 0;\">案件 #${number} 公開日: {$rows["公開日"]}</div>
        <div style=\"display: inline-flex;width: 100%;padding: 0.5vw 0vw;\">
            <div style=\"padding: 0.5vw 0vw;font-size: 3.2vw;\" flex-grow=\"1\">
                <div>
							<span style=\"background-color: #e4e4e4;margin-right: 3vw;padding: 2vw 3vw 2vw 1.5vw;border-radius: 1vw;font-size: 3.73vw;\">業種　　　</span>{$rows["業種"]}
                </div>
			    	 <div style=\"margin: 4vw 0;\">
                    <span style=\"background-color: #e4e4e4;margin-right: 2vw;padding: 2vw 3vw 2vw 1.5vw;font-size: 3.73vw;border-radius: 1;\">報酬　　　</span>
                    <span style=\"color: #bf272d;font-size: 3.73vw;\">{$rows["報酬"]}</span>
                    <span style=\"font-size: 2.66vw;margin-left: 0.5vw;\">(税別)</span>
                </div>
                <div style=\"margin: 4vw 0;\">
                    <span style=\"background-color: #e4e4e4;margin-right: 3vw;padding: 2vw 3vw 2vw 1.5vw;border-radius: 0.5vw;font-size: 3.73vw;\">期間　　　</span>2021/10～2022/12/31
                </div>
						<div style=\"padding: 0vw 0vw;display: flex;align-items: flex-start;\" flex-grow=\"1\">
							<span style=\"background-color: #e4e4e4;margin-right: 0.8vw;padding: 2vw 3vw 2vw 1.5vw;border-radius: 0.5vw;\">スキル　　</span>
							<div style=\"line-height: 1.7; \">{$rows["スキル"]}</div>
						</div>
            </div>
            
        </div>
    </div>
	<a href=\"/2021/11/28/案件情報_詳細/\"><div style=\"text-align: center; margin: 2vw 0;\"><button type=\"submit\" name=\"submit\" value=\"submit\" style=\"width: 79vw;height: 16vw;font-size: 3.73vw;color: #546363;border-color: #83ccd2;border-width: 1.5vw;background-color: white;border-radius: 10vw;position: relative;\">案件の詳細を見る・応募する<img src=\"http://3.112.250.183/wp-content/uploads/2021/12/icon_circle_next_sky.svg\" style=\"position: absolute;top: 50%;right: 5vw;width: 5vw;transform: translateY(-50%);\"></button></div></a>

</div>";
	return $msg;
}

add_shortcode('matter_detail', 'matterDetail');
add_shortcode('matter_overview', 'matterOverview');
add_shortcode('matter_overview_sp', 'matterOverviewSp');
?>