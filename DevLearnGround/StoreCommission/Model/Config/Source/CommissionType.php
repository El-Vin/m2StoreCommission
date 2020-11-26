<?php
namespace DevLearnground\StoreCommission\Model\Config\Source;

class CommissionType implements \Magento\Framework\Option\ArrayInterface
{
    /**
     * {@inheritdoc}
     *
     * @codeCoverageIgnore
     */
    public function toOptionArray()
    {
        return [
            [
                'value' => 'fixed', 
                'label' => __('Fixed')
            ], 
            [
                'value' => 'percentage', 
                'label' => __('Percentage')
            ]
        ];
    }
}
