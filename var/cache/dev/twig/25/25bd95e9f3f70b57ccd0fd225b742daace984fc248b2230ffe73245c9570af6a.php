<?php

/* operacje/nieprzypisane.html.twig */
class __TwigTemplate_338d7f690c18e25d8ab78ee4416d7136a5f1e96c911348e42df5e6a8a24c7ce6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "operacje/nieprzypisane.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b31716aca87b19395d77bd7d145e454df95a29447c0b2a2d00fb2ae9924ee253 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b31716aca87b19395d77bd7d145e454df95a29447c0b2a2d00fb2ae9924ee253->enter($__internal_b31716aca87b19395d77bd7d145e454df95a29447c0b2a2d00fb2ae9924ee253_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "operacje/nieprzypisane.html.twig"));

        $__internal_bd025cdec2ea059bc31f8745b9bbf60ec406ed9656f29318302231b56baae3b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd025cdec2ea059bc31f8745b9bbf60ec406ed9656f29318302231b56baae3b6->enter($__internal_bd025cdec2ea059bc31f8745b9bbf60ec406ed9656f29318302231b56baae3b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "operacje/nieprzypisane.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b31716aca87b19395d77bd7d145e454df95a29447c0b2a2d00fb2ae9924ee253->leave($__internal_b31716aca87b19395d77bd7d145e454df95a29447c0b2a2d00fb2ae9924ee253_prof);

        
        $__internal_bd025cdec2ea059bc31f8745b9bbf60ec406ed9656f29318302231b56baae3b6->leave($__internal_bd025cdec2ea059bc31f8745b9bbf60ec406ed9656f29318302231b56baae3b6_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_fefca9cebd22ae301fefc9cd78b8a6ce5d994fe613823a5f1e214360a6dae128 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fefca9cebd22ae301fefc9cd78b8a6ce5d994fe613823a5f1e214360a6dae128->enter($__internal_fefca9cebd22ae301fefc9cd78b8a6ce5d994fe613823a5f1e214360a6dae128_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4331a69c344e01ab89afaaa1ee830edffad05df4a646e02cd37e632b59676d14 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4331a69c344e01ab89afaaa1ee830edffad05df4a646e02cd37e632b59676d14->enter($__internal_4331a69c344e01ab89afaaa1ee830edffad05df4a646e02cd37e632b59676d14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Operacje bez kategorii</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Dataoperacji</th>
                <th>Opisoperacji</th>
                <th>Tytul</th>
                <th>Kontrahent</th>
                <th>Kwota</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["operacjes"] ?? $this->getContext($context, "operacjes")));
        foreach ($context['_seq'] as $context["_key"] => $context["operacje"]) {
            // line 19
            echo "            <tr>
                <td><a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("operacje_ustaw_kategorie", array("id" => $this->getAttribute($context["operacje"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["operacje"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 21
            if ($this->getAttribute($context["operacje"], "dataOperacji", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["operacje"], "dataOperacji", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>

                <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["operacje"], "opisOperacji", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["operacje"], "tytul", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["operacje"], "kontrahent", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["operacje"], "kwota", array()), "html", null, true);
            echo "</td>

                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("operacje_ustaw_kategorie", array("id" => $this->getAttribute($context["operacje"], "id", array()))), "html", null, true);
            echo "\">Przypisz Kategorie</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['operacje'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 42
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("operacje_zaladuj_plik");
        echo "\">Upload wyciągu bankowego</a>
        </li>
        <li>
            <a href=\"";
        // line 45
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("naszefirmy_new");
        echo "\">Nowa firma</a>
        </li>
        <li>
            <a href=\"";
        // line 48
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("projekty_new");
        echo "\">Nowy projekt</a>
        </li>
        <li>
            <a href=\"";
        // line 51
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("faktury_new");
        echo "\">Nowa faktura</a>
        </li>
        <li>
            <a href=\"";
        // line 54
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("podatki_new");
        echo "\">Nowy podatek</a>
        </li>
        <li>
            <a href=\"";
        // line 57
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("platnosci");
        echo "\">Nieopłacone faktury i podatki</a>
        </li>

    </ul>
";
        
        $__internal_4331a69c344e01ab89afaaa1ee830edffad05df4a646e02cd37e632b59676d14->leave($__internal_4331a69c344e01ab89afaaa1ee830edffad05df4a646e02cd37e632b59676d14_prof);

        
        $__internal_fefca9cebd22ae301fefc9cd78b8a6ce5d994fe613823a5f1e214360a6dae128->leave($__internal_fefca9cebd22ae301fefc9cd78b8a6ce5d994fe613823a5f1e214360a6dae128_prof);

    }

    public function getTemplateName()
    {
        return "operacje/nieprzypisane.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 57,  148 => 54,  142 => 51,  136 => 48,  130 => 45,  124 => 42,  117 => 37,  105 => 31,  97 => 26,  93 => 25,  89 => 24,  85 => 23,  78 => 21,  72 => 20,  69 => 19,  65 => 18,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Operacje bez kategorii</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Dataoperacji</th>
                <th>Opisoperacji</th>
                <th>Tytul</th>
                <th>Kontrahent</th>
                <th>Kwota</th>
            </tr>
        </thead>
        <tbody>
        {% for operacje in operacjes %}
            <tr>
                <td><a href=\"{{ path('operacje_ustaw_kategorie', { 'id': operacje.id }) }}\">{{ operacje.id }}</a></td>
                <td>{% if operacje.dataOperacji %}{{ operacje.dataOperacji|date('Y-m-d H:i:s') }}{% endif %}</td>

                <td>{{ operacje.opisOperacji }}</td>
                <td>{{ operacje.tytul }}</td>
                <td>{{ operacje.kontrahent }}</td>
                <td>{{ operacje.kwota }}</td>

                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('operacje_ustaw_kategorie', { 'id': operacje.id }) }}\">Przypisz Kategorie</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('operacje_zaladuj_plik') }}\">Upload wyciągu bankowego</a>
        </li>
        <li>
            <a href=\"{{ path('naszefirmy_new') }}\">Nowa firma</a>
        </li>
        <li>
            <a href=\"{{ path('projekty_new') }}\">Nowy projekt</a>
        </li>
        <li>
            <a href=\"{{ path('faktury_new') }}\">Nowa faktura</a>
        </li>
        <li>
            <a href=\"{{ path('podatki_new') }}\">Nowy podatek</a>
        </li>
        <li>
            <a href=\"{{ path('platnosci') }}\">Nieopłacone faktury i podatki</a>
        </li>

    </ul>
{% endblock %}
", "operacje/nieprzypisane.html.twig", "D:\\xampp\\htdocs\\kasomator\\app\\Resources\\views\\operacje\\nieprzypisane.html.twig");
    }
}
