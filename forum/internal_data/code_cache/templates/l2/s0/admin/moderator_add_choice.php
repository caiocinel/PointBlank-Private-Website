<?php
// FROM HASH: 93b078b2ccc6552eb3f3583d82a97f2c
return array('macros' => array(), 'code' => function($__templater, array $__vars)
{
	$__finalCompiled = '';
	$__templater->pageParams['pageTitle'] = $__templater->preEscaped('Adicionar moderador');
	$__finalCompiled .= '

';
	$__compilerTemp1 = array(array(
		'value' => '_super',
		'selected' => true,
		'label' => 'Super moderador',
		'hint' => 'Um super moderador pode moderar todo o fórum.',
		'_type' => 'option',
	));
	if ($__templater->isTraversable($__vars['typeChoices'])) {
		foreach ($__vars['typeChoices'] AS $__vars['contentType'] => $__vars['options']) {
			$__compilerTemp2 = array();
			if ($__templater->isTraversable($__vars['options']['choices'])) {
				foreach ($__vars['options']['choices'] AS $__vars['choice']) {
					$__compilerTemp2[] = array(
						'value' => $__vars['choice']['value'],
						'label' => $__templater->escape($__vars['choice']['label']),
						'disabled' => $__vars['choice']['disabled'],
						'_type' => 'option',
					);
				}
			}
			$__compilerTemp1[] = array(
				'value' => $__vars['contentType'],
				'label' => $__templater->escape($__vars['options']['label']),
				'_dependent' => array($__templater->formSelect(array(
				'name' => $__vars['options']['name'],
				'value' => $__vars['options']['value'],
			), $__compilerTemp2)),
				'_type' => 'option',
			);
		}
	}
	$__finalCompiled .= $__templater->form('
	<div class="block-container">
		<div class="block-body">
			' . $__templater->formTextBoxRow(array(
		'name' => 'username',
		'value' => $__vars['username'],
		'type' => 'search',
		'ac' => 'single',
		'placeholder' => 'Nome de usuário' . $__vars['xf']['language']['ellipsis'],
	), array(
		'label' => 'Nome de usuário do moderador',
	)) . '

			' . $__templater->formRadioRow(array(
		'name' => 'type',
		'value' => $__vars['type'],
	), $__compilerTemp1, array(
		'label' => 'Tipo de moderador',
	)) . '
		</div>
		' . $__templater->formSubmitRow(array(
		'submit' => 'Adicionar moderador' . $__vars['xf']['language']['ellipsis'],
	), array(
	)) . '
	</div>
', array(
		'action' => $__templater->func('link', array('moderators/add', ), false),
		'class' => 'block',
	));
	return $__finalCompiled;
});