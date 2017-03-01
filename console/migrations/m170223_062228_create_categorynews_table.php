<?php

use yii\db\Migration;

/**
 * Handles the creation of table `categorynews`.
 */
class m170223_062228_create_categorynews_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }
          $this->createTable('{{%categorynews}}', [
            'id' => $this->primaryKey(),
            'cat_name_news' => $this->string()->notNull()->unique(),
            'status'=> $this->smallInteger(),
            'created_at' => $this->dateTime(),
            'updated_at' => $this->dateTime(),
        ], $tableOptions);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('categorynews');
    }
}
