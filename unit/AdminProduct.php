<?php

final class AdminProduct
{
    function userIsAdmin($roleString):bool{
        if ($roleString == "Администратор")
        {
            return true;
            /*
            return
            '
                <li class="menu__item">
                    <a href="../addproduct/addProduct.php">
                        <button class="menu__item-create" type="button" name="createProduct">
                            <svg xmlns="http://www.w3.org/2000/svg" height="48" viewBox="0 -960 960 960" width="48">
                                <path d="M450-200v-250H200v-60h250v-250h60v250h250v60H510v250h-60Z"/>
                            </svg>
                            <span>Добавить товар</span>
                        </button>
                    </a>
                </li>
            ';
            */
        }
        return false;
    }
}