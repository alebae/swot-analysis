<?php
namespace SWOT\Model;
use Doctrine\ORM\Mapping as ORM;
/**
* @Entity
* @Table(name="usuarios")
*/
class User
{
    /**
    * @Id
    * @Column(type="integer", name="idUsuario")
    * @GeneratedValue(strategy="AUTO")
    * @var integer
    */
    protected $id;

    /**
    * @Column(type="string", name="nome", length=200)
    * @var string
    */
    protected $nome;

    /**
    * @Column(type="string", name="email", length=200)
    * @var string
    */
    protected $email;

    /**
    * @Column(type="string", name="login", length=50)
    * @var string
    */
    protected $login;

    /**
    * @Column(type="string", name="senha")
    * @var string
    */
    protected $senha;

     /**
     * Get Nome
     *
     * @return string
     */
    public function getNome()
    {
	    return $this->nome;
    }

    public function setNome($nome)
    {
	    $this->nome = $nome;
    }

     /**
     * Get Email
     *
     * @return string
     */
    public function getEmail()
    {
	    return $this->email;
    }

    public function setEmail($email)
    {
	    if( !filter_var($email, FILTER_VALIDATE_EMAIL) ) {
	       throw new \InvalidArgumentException('E-mail incorreto!');
	    }

	    $this->email = $email;
    }

     /**
     * Get Login
     *
     * @return string
     */
    public function getLogin()
    {
       return $this->login;
    }

    public function setLogin($login)
    {
        $this->login = $login;
    }

    /**
     * Get Senha
     *
     * @return string
     */
    public function getSenha()
    {
       return $this->senha;
    }

    public function setSenha($senha)
    {
       $this->senha = $senha;
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }
}
