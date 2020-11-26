<?php
namespace DevLearnGround\StoreCommission\Setup;

use Magento\Framework\Setup\UpgradeSchemaInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;

class UpgradeSchema implements UpgradeSchemaInterface
{
    public function upgrade(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
        $setup->startSetup();

        //tables
        $quoteTable = 'quote';
        $orderTable = 'sales_order';
        $invoiceTable = 'sales_invoice';
        $creditmemoTable = 'sales_creditmemo';

        if (version_compare($context->getVersion(), '1.0.0', '<')) {
            //Quote Table
            $setup->getConnection()->addColumn(
                $setup->getTable($quoteTable),
                'commission_type',
                [
                    'type' => \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
                    'nullable' => true,
                    'comment' => 'Commission Type'
                ]
                );
            $setup->getConnection()->addColumn(
                $setup->getTable($quoteTable),
                'commission_value',
                [
                    'type'     => \Magento\Framework\DB\Ddl\Table::TYPE_DECIMAL,
                    'length'   => '10,2',
                    'default'  => 0.00,
                    'nullable' => true,
                    'comment' => 'Commission Value'
                ]
                );
            $setup->getConnection()->addColumn(
                $setup->getTable($quoteTable),
                'roundoff_commission',
                [
                    'type' => \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
                    'nullable' => true,
                    'comment' => 'Round Off Commission'
                ]
            );

            //Sales Order Table
            $setup->getConnection()->addColumn(
                $setup->getTable($orderTable),
                'commission_type',
                [
                    'type' => \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
                    'nullable' => true,
                    'comment' => 'Commission Type'
                ]
                );
            $setup->getConnection()->addColumn(
                $setup->getTable($orderTable),
                'commission_value',
                [
                    'type'     => \Magento\Framework\DB\Ddl\Table::TYPE_DECIMAL,
                    'length'   => '10,2',
                    'default'  => 0.00,
                    'nullable' => true,
                    'comment' => 'Commission Value'
                ]
                );
            $setup->getConnection()->addColumn(
                $setup->getTable($orderTable),
                'roundoff_commission',
                [
                    'type' => \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
                    'nullable' => true,
                    'comment' => 'Round Off Commission'
                ]
            );

            //Sales Invoice Table
            $setup->getConnection()->addColumn(
                $setup->getTable($invoiceTable),
                'commission_type',
                [
                    'type' => \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
                    'nullable' => true,
                    'comment' => 'Commission Type'
                ]
                );
            $setup->getConnection()->addColumn(
                $setup->getTable($invoiceTable),
                'commission_value',
                [
                    'type'     => \Magento\Framework\DB\Ddl\Table::TYPE_DECIMAL,
                    'length'   => '10,2',
                    'default'  => 0.00,
                    'nullable' => true,
                    'comment' => 'Commission Value'
                ]
                );
            $setup->getConnection()->addColumn(
                $setup->getTable($invoiceTable),
                'roundoff_commission',
                [
                    'type' => \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
                    'nullable' => true,
                    'comment' => 'Round Off Commission'
                ]
            );

            //Sales Credit Memo Table
            $setup->getConnection()->addColumn(
                $setup->getTable($creditmemoTable),
                'commission_type',
                [
                    'type' => \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
                    'nullable' => true,
                    'comment' => 'Commission Type'
                ]
                );
            $setup->getConnection()->addColumn(
                $setup->getTable($creditmemoTable),
                'commission_value',
                [
                    'type'     => \Magento\Framework\DB\Ddl\Table::TYPE_DECIMAL,
                    'length'   => '10,2',
                    'default'  => 0.00,
                    'nullable' => true,
                    'comment' => 'Commission Value'
                ]
                );
            $setup->getConnection()->addColumn(
                $setup->getTable($creditmemoTable),
                'roundoff_commission',
                [
                    'type' => \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
                    'nullable' => true,
                    'comment' => 'Round Off Commission'
                ]
            );
        }

        $setup->endSetup();
    }

}
