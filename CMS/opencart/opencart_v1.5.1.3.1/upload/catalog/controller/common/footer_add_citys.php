<?php
		/////////////////////////////////////////////
		//загружаем продукт:
		/*
		if (isset($this->request->get['path'])) {
			$path = '';

			foreach (explode('_', $this->request->get['path']) as $path_id) {
				if (!$path) {
					$path = $path_id;
				} else {
					$path .= '_' . $path_id;
				}

				$category_info = $this->model_catalog_category->getCategory($path_id);

				if ($category_info) {
					$this->data['breadcrumbs'][] = array(
						'text'      => $category_info['name'],
						'href'      => $this->url->link('product/category', 'path=' . $path),
						'separator' => $this->language->get('text_separator')
					);
				}
			}
		}
        */
        /*
		$this->load->model('catalog/manufacturer');
		$this->language->load('product/product');
        */
		if (isset($this->request->get['product_id'])) {
			$product_id = $this->request->get['product_id'];
		} else {
			$product_id = 0;
		}
		$this->load->model('catalog/product');

		$product_info = $this->model_catalog_product->getProduct($product_id);
		if ($product_info) {

   		$this->data['heading_title'] = $product_info['name'];
		//загружаем список городов

        }
        $this->load->model('constants');
		$this->data['tags_city'] = $this->model_constants->getValueByAlias('tags_city');
		$this->data['tags_city_2'] = $this->model_constants->getValueByAlias('tags_city_2');
		/////////////////////////////////////////////


?>