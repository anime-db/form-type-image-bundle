<?php
/**
 * AnimeDb package
 *
 * @package   AnimeDb
 * @author    Peter Gribanov <info@peter-gribanov.ru>
 * @copyright Copyright (c) 2016, Peter Gribanov
 * @license   http://opensource.org/licenses/MIT
 */

namespace AnimeDb\Bundle\FormTypeImageBundle\Form\Type\Handler;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Image;

/**
 * ImageHandler
 * @package AnimeDb\Bundle\FormTypeImageBundle\Form\Type\Handler
 */
class ImageHandler extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('file', 'file', [
            'constraints' => [
                new NotBlank(),
                new Image([
                    'maxSize' => '2M',
                    'minWidth' => 100,
                    'maxWidth' => 2000,
                    'minHeight' => 100,
                    'maxHeight' => 2000
                ])
            ]
        ]);
    }
}