<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_8a50db4faa94afcefdcf679c994a52cfdbbe9d2ca5d8d038143bd71b48c9aece extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f89bc64ce21b8fec7cbb971517e9f072e71c23e24cd5fbf4e1a46f209043e33b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f89bc64ce21b8fec7cbb971517e9f072e71c23e24cd5fbf4e1a46f209043e33b->enter($__internal_f89bc64ce21b8fec7cbb971517e9f072e71c23e24cd5fbf4e1a46f209043e33b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_6dee6b53244ae74b684ae2c1a7aca02ee50149ccc5af49a8bb7e44aef3b6ceb3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6dee6b53244ae74b684ae2c1a7aca02ee50149ccc5af49a8bb7e44aef3b6ceb3->enter($__internal_6dee6b53244ae74b684ae2c1a7aca02ee50149ccc5af49a8bb7e44aef3b6ceb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_f89bc64ce21b8fec7cbb971517e9f072e71c23e24cd5fbf4e1a46f209043e33b->leave($__internal_f89bc64ce21b8fec7cbb971517e9f072e71c23e24cd5fbf4e1a46f209043e33b_prof);

        
        $__internal_6dee6b53244ae74b684ae2c1a7aca02ee50149ccc5af49a8bb7e44aef3b6ceb3->leave($__internal_6dee6b53244ae74b684ae2c1a7aca02ee50149ccc5af49a8bb7e44aef3b6ceb3_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_4be7c317c7a343f1bbae485d0da8024604dc8809fad2df01f6d351e4805241e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4be7c317c7a343f1bbae485d0da8024604dc8809fad2df01f6d351e4805241e2->enter($__internal_4be7c317c7a343f1bbae485d0da8024604dc8809fad2df01f6d351e4805241e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_8d0372d8415a3889d1332042b15d1e678e8e81fc69bfcf83ee0cf0964d4d052c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d0372d8415a3889d1332042b15d1e678e8e81fc69bfcf83ee0cf0964d4d052c->enter($__internal_8d0372d8415a3889d1332042b15d1e678e8e81fc69bfcf83ee0cf0964d4d052c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_8d0372d8415a3889d1332042b15d1e678e8e81fc69bfcf83ee0cf0964d4d052c->leave($__internal_8d0372d8415a3889d1332042b15d1e678e8e81fc69bfcf83ee0cf0964d4d052c_prof);

        
        $__internal_4be7c317c7a343f1bbae485d0da8024604dc8809fad2df01f6d351e4805241e2->leave($__internal_4be7c317c7a343f1bbae485d0da8024604dc8809fad2df01f6d351e4805241e2_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_79cccdad0c56e7dc78a929daf418f1eb96c537c9f399e21da3eacba1dd79d77a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_79cccdad0c56e7dc78a929daf418f1eb96c537c9f399e21da3eacba1dd79d77a->enter($__internal_79cccdad0c56e7dc78a929daf418f1eb96c537c9f399e21da3eacba1dd79d77a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_72704232ac339913115ec870955114d12fe6f56e99c492b5b67a3af12ef3aa3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72704232ac339913115ec870955114d12fe6f56e99c492b5b67a3af12ef3aa3a->enter($__internal_72704232ac339913115ec870955114d12fe6f56e99c492b5b67a3af12ef3aa3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_72704232ac339913115ec870955114d12fe6f56e99c492b5b67a3af12ef3aa3a->leave($__internal_72704232ac339913115ec870955114d12fe6f56e99c492b5b67a3af12ef3aa3a_prof);

        
        $__internal_79cccdad0c56e7dc78a929daf418f1eb96c537c9f399e21da3eacba1dd79d77a->leave($__internal_79cccdad0c56e7dc78a929daf418f1eb96c537c9f399e21da3eacba1dd79d77a_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_3812f7cb8b0816ba89e48daacf3a0df3b1bd6b612df8d4323cce817aa6d2aad9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3812f7cb8b0816ba89e48daacf3a0df3b1bd6b612df8d4323cce817aa6d2aad9->enter($__internal_3812f7cb8b0816ba89e48daacf3a0df3b1bd6b612df8d4323cce817aa6d2aad9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_894b2b93d51aa0b1ba923ba06787122d5152770e2478438e535696e8a55e801e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_894b2b93d51aa0b1ba923ba06787122d5152770e2478438e535696e8a55e801e->enter($__internal_894b2b93d51aa0b1ba923ba06787122d5152770e2478438e535696e8a55e801e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_894b2b93d51aa0b1ba923ba06787122d5152770e2478438e535696e8a55e801e->leave($__internal_894b2b93d51aa0b1ba923ba06787122d5152770e2478438e535696e8a55e801e_prof);

        
        $__internal_3812f7cb8b0816ba89e48daacf3a0df3b1bd6b612df8d4323cce817aa6d2aad9->leave($__internal_3812f7cb8b0816ba89e48daacf3a0df3b1bd6b612df8d4323cce817aa6d2aad9_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "D:\\xampp\\htdocs\\kasomator\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\layout.html.twig");
    }
}
