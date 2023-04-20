{"version":3,"sources":["script.js"],"names":["BX","namespace","Main","UserConsent","Edit","params","this","isSaved","mess","listDomIds","container","typeNode","querySelector","langNode","initialLang","value","typeSelectorNode","typeViewNode","dataProviderNode","dataProviderInputNode","dataProviderUrlNode","fieldListNodes","querySelectorAll","convert","nodeListToArray","bind","showAgreementText","onTypeChange","fireEvent","onDataProviderChange","onDataProviderUrlClick","getFields","forEach","field","togglerNode","toggledNode","inputNode","style","display","checked","disabled","top","window","e","onCustomEvent","preventDefault","sendEventMessageAboutSave","prototype","showTextTab","showTab","showSettingsTab","showListTab","type","fieldListNode","isTypeVisible","fieldNodes","listFields","fieldNode","getAttribute","submit","option","options","selectedIndex","data","editUrl","JSON","parse","provider","name","innerText","dataset","href","showFieldsDataProvider","SidePanel","Instance","open","lang","isSupportDataProviders","agreementText","setAttribute","fieldType","fieldLang","text","agreementViewPopup","node","document","createElement","addClass","agreementViewPopupContentNode","PopupWindowManager","create","titleBar","viewTitle","content","autoHide","lightShadow","closeByEsc","closeIcon","overlay","backgroundColor","opacity","buttons","PopupWindowButton","close","events","click","popupWindow","textContent","show","hideAttribute","changeDisplay","isInputVisible","view","fields","filter","item","CODE","code","nameNode","trim","valueNode","VALUE","context","getFieldNodes","map"],"mappings":"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","file":"script.map.js"}