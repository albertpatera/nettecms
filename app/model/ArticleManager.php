<?php

namespace App\Model;

use App\Model\BaseManager;
use Nette\Database\Table\IRow;
use Nette\Database\Table\Selection;
use Nette\Utils\ArrayHash;


class ArticleManager extends BaseManager
{
	//constants for manipulation with model

	const
		TABLE_NAME = 'article',
		COLUMN_ID = 'article_id',
		CULUMN_URL = 'url';

	public function getArticles()
	{
		return $this->database->table(self::TABLE_NAME)->order(self::COLUMN_ID . ' DESC');
	} 

	//items by actual url 

	public function getArticle($url)
	{
		return $this->database->table(self::TABLE_NAME)->where(self::CULUMN_URL, $url)->fetch();
	}

}