<?php
/**
 * This file is part of osCommerce ecommerce platform.
 * osCommerce the ecommerce
 *
 * @link https://www.oscommerce.com
 * @copyright Copyright (c) 2000-2022 osCommerce LTD
 *
 * Released under the GNU General Public License
 * For the full copyright and license information, please view the LICENSE.TXT file that was distributed with this source code.
 */

use common\classes\Migration;

/**
 * Class m221020_154504_company_name_per_tax_rate
 */
class m221020_154504_company_name_per_tax_rate extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->addColumnIfMissing('tax_rates', 'company_name', $this->string(1024)->notNull()->defaultValue(''));
        $this->db->createCommand("update tax_rates set company_name='MIKO Direct to Consumer' where company_name='' and company_number<>''")->execute();

    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
//        echo "m221020_154504_company_name_per_tax_rate cannot be reverted.\n";

//        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m221020_154504_company_name_per_tax_rate cannot be reverted.\n";

        return false;
    }
    */
}
