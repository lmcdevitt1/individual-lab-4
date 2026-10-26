<?php

it('has test1 page', function () {
    $response = $this->get('/test1');

    $response->assertStatus(200);
});
