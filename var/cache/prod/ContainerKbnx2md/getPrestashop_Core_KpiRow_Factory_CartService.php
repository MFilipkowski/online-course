<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.core.kpi_row.factory.cart' shared service.

return $this->services['prestashop.core.kpi_row.factory.cart'] = new \PrestaShop\PrestaShop\Core\Kpi\Row\HookableKpiRowFactory([0 => ${($_ = isset($this->services['prestashop.adapter.kpi.shopping_cart_total_kpi']) ? $this->services['prestashop.adapter.kpi.shopping_cart_total_kpi'] : $this->load('getPrestashop_Adapter_Kpi_ShoppingCartTotalKpiService.php')) && false ?: '_'}], ${($_ = isset($this->services['prestashop.core.hook.dispatcher']) ? $this->services['prestashop.core.hook.dispatcher'] : $this->getPrestashop_Core_Hook_DispatcherService()) && false ?: '_'}, 'cart');
