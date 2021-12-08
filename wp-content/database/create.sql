CREATE TABLE `mysql`.`案件情報詳細` ( `業種` VARCHAR(100) NOT NULL , `報酬` VARCHAR(100) NOT NULL , `期間` VARCHAR(100) NOT NULL , `スキル` TEXT NOT NULL , `ポジション` VARCHAR(100) NOT NULL , `雇用形態` VARCHAR(100) NOT NULL , `年齢` VARCHAR(10) NOT NULL , `勤務地` VARCHAR(100) NOT NULL , `稼働率` VARCHAR(10) NOT NULL , `募集人数` VARCHAR(10) NOT NULL , `タイトル` VARCHAR(100) NOT NULL , `番号` INT NOT NULL , `公開日` DATE NOT NULL DEFAULT CURRENT_TIMESTAMP , PRIMARY KEY (`番号`)) ENGINE = InnoDB;