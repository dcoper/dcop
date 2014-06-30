<?php echo $this->Form->create('Product', array(
    'url' => array_merge(
            array(
                'action' => 'find'
            ),
            $this->params['pass']
        )
    )
);
echo $this->Form->input('part_number', array(
        'div' => false
    )
);

echo $this->Form->submit(__('Search'), array(
        'div' => false
    )
);
echo $this->Form->end();

?>