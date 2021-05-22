<?php

use phpDocumentor\Reflection\Types\This;
use yii\db\cubrid\Schema;
use yii\db\Migration;

/**
 * Class m210403_014810_country
 */
class m210403_014810_country extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('country', [
            'no' => $this->char(5)->primaryKey(),
            'name' => $this->char(5),
            'population' => Schema::TYPE_INTEGER
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m210403_014810_country cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210403_014810_country cannot be reverted.\n";

        return false;
    }
    */
}
