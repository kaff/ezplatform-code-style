<?php

/**
 * @copyright Copyright (C) Ibexa AS. All rights reserved.
 * @license For full copyright and license information view LICENSE file distributed with this source code.
 */
declare(strict_types=1);

namespace EzSystems\EzPlatformCodeStyle\PhpCsFixer;

use PhpCsFixer\Config as ConfigBase;

class Config extends ConfigBase
{
    public function __construct($name = 'default')
    {
        parent::__construct($name);

        $this->setRiskyAllowed(true);
        $this->setRules([
            'encoding' => true,
            'full_opening_tag' => true,
            'blank_line_after_namespace' => true,
            'elseif' => true,
            'function_declaration' => true,
            'indentation_type' => true,
            'line_ending' => true,
            'lowercase_constants' => true,
            'lowercase_keywords' => true,
            'no_closing_tag' => true,
            'no_spaces_after_function_name' => true,
            'no_spaces_inside_parenthesis' => true,
            'no_trailing_whitespace' => true,
            'no_trailing_whitespace_in_comment' => true,
            'single_blank_line_at_eof' => true,
            'single_import_per_statement' => true,
            'single_line_after_imports' => true,
            'switch_case_semicolon_to_colon' => true,
            'switch_case_space' => true,
            'visibility_required' => true,
            'binary_operator_spaces' => true,
            'blank_line_before_statement' => [
                'statements' => ['return'],
            ],
            'braces' => [
                'allow_single_line_closure' => true,
            ],
            'class_attributes_separation' => ['elements' => ['method']],
            'class_definition' => ['single_line' => true],
            'declare_equal_normalize' => true,
            'function_typehint_space' => true,
            'include' => true,
            'increment_style' => true,
            'lowercase_cast' => true,
            'lowercase_static_reference' => true,
            'magic_constant_casing' => true,
            'magic_method_casing' => true,
            'method_argument_space' => true,
            'native_function_casing' => true,
            'native_function_type_declaration_casing' => true,
            'new_with_braces' => true,
            'no_blank_lines_after_class_opening' => true,
            'no_blank_lines_after_phpdoc' => true,
            'no_empty_comment' => true,
            'no_empty_phpdoc' => true,
            'no_empty_statement' => true,
            'no_extra_blank_lines' => ['tokens' => [
                'curly_brace_block',
                'extra',
                'parenthesis_brace_block',
                'square_brace_block',
                'throw',
                'use',
            ]],
            'no_leading_import_slash' => true,
            'no_leading_namespace_whitespace' => true,
            'no_mixed_echo_print' => true,
            'no_multiline_whitespace_around_double_arrow' => true,
            'no_short_bool_cast' => true,
            'no_singleline_whitespace_before_semicolons' => true,
            'no_spaces_around_offset' => true,
            'no_trailing_comma_in_list_call' => true,
            'no_trailing_comma_in_singleline_array' => true,
            'no_unneeded_control_parentheses' => true,
            'no_unneeded_curly_braces' => true,
            'no_unneeded_final_method' => true,
            'no_unused_imports' => true,
            'no_whitespace_before_comma_in_array' => true,
            'no_whitespace_in_blank_line' => true,
            'normalize_index_brace' => true,
            'object_operator_without_whitespace' => true,
            'php_unit_fqcn_annotation' => true,
            'phpdoc_annotation_without_dot' => false,
            'phpdoc_indent' => true,
            'phpdoc_inline_tag' => true,
            'phpdoc_no_access' => true,
            'phpdoc_no_alias_tag' => [
                'replacements' => [
                    'type' => 'var',
                    'link' => 'see',
                ],
            ],
            'phpdoc_no_empty_return' => true,
            'phpdoc_no_package' => true,
            'phpdoc_no_useless_inheritdoc' => true,
            'phpdoc_return_self_reference' => true,
            'phpdoc_scalar' => true,
            'phpdoc_separation' => true,
            'phpdoc_single_line_var_spacing' => true,
            'phpdoc_summary' => true,
            'phpdoc_trim' => true,
            'phpdoc_types' => true,
            'phpdoc_var_without_name' => true,
            'protected_to_private' => true,
            'return_type_declaration' => true,
            'semicolon_after_instruction' => true,
            'short_scalar_cast' => true,
            'single_class_element_per_statement' => true,
            'single_line_comment_style' => [
                'comment_types' => ['hash'],
            ],
            'single_quote' => true,
            'single_trait_insert_per_statement' => true,
            'standardize_increment' => true,
            'standardize_not_equals' => true,
            'ternary_operator_spaces' => true,
            'trailing_comma_in_multiline_array' => true,
            'trim_array_spaces' => true,
            'unary_operator_spaces' => true,
            'whitespace_after_comma_in_array' => true,
            'dir_constant' => true,
            'ereg_to_preg' => true,
            'error_suppression' => true,
            'fopen_flag_order' => true,
            'fopen_flags' => false,
            'function_to_constant' => true,
            'implode_call' => true,
            'is_null' => true,
            'modernize_types_casting' => true,
            'native_constant_invocation' => [
                'fix_built_in' => false,
                'include' => [
                    'DIRECTORY_SEPARATOR',
                    'PHP_SAPI',
                    'PHP_VERSION_ID',
                ],
                'scope' => 'namespaced',
            ],
            'no_alias_functions' => true,
            'no_homoglyph_names' => true,
            'non_printable_character' => true,
            'php_unit_construct' => true,
            'psr4' => true,
            'set_type_to_cast' => true,
            'concat_space' => ['spacing' => 'one'],
            'array_syntax' => ['syntax' => 'short'],
            'simplified_null_return' => false,
            'phpdoc_align' => false,
            'phpdoc_to_comment' => false,
            'cast_spaces' => false,
            'blank_line_after_opening_tag' => false,
            'single_blank_line_before_namespace' => false,
            'space_after_semicolon' => false,
            'native_function_invocation' => false,
            'phpdoc_types_order' => [
                'null_adjustment' => 'always_last',
                'sort_algorithm' => 'none',
            ],
            'php_unit_mock_short_will_return' => false,
            'yoda_style' => false,
            'no_break_comment' => false,
            'self_accessor' => false,
            'static_lambda' => true,
        ]);
    }
}
