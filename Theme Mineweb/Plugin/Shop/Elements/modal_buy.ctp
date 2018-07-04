  [IF REDUCTIONAL_ITEMS]
    <div class="alert alert-info">
      {REDUCTIONAL_ITEMS_LIST}
    </div>
  [/IF REDUCTIONAL_ITEMS]

  <p><b>{LANG-SHOP__ITEM_NAME} :</b> {ITEM_NAME}</p>
  <p><b>{LANG-SHOP__ITEM_DESCRIPTION} :</b> {ITEM_DESCRIPTION}</p>
  [IF AFFICH_SERVER]
    <p><b>{LANG-SERVER__TITLE} :</b> {ITEM_SERVERS}</p>
  [/IF AFFICH_SERVER]
  <p><b>{LANG-SHOP__ITEM_PRICE} :</b> {ITEM_PRICE} {SITE_MONEY}</p>
  <p><input name="code" type="text" class="form-control" autocomplete="off" id="code-voucher" style="width:100%;" placeholder="{LANG-SHOP__BUY_VOUCHER_ASK}"></p>
</div>
<div class="modal-footer">
    <div class="col-md-12">
    [IF MULTIPLE_BUY]
    <input type="text" value="1" name="quantity">
    [/IF MULTIPLE_BUY]
    
        [IF ADD_TO_CART]
        <button type="button" class="nk-btn nk-btn-block nk-btn-lg nk-btn-color-main-1 link-effect-4 ready add-to-cart" data-item-id="{ITEM_ID}" id="btn-cart">{LANG-SHOP__BUY_ADD_TO_CART}</button>
        [/IF ADD_TO_CART]
        <button type="button" class="nk-btn nk-btn-block nk-btn-lg nk-btn-color-main-1 link-effect-4 ready buy-item" data-item-id="{ITEM_ID}" id="btn-buy">{LANG-SHOP__BUY}</button>
    </div>
