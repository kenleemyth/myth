<?php
/*
* PHP操作MSSQL类
* ----------------------------------------------------------------------------
* Created on 2011-11-19 by aklee
*
*/
class mssql{

          private $db_IP;                  //数据库IP
          private $db_user;                 //数据库用户
          private $db_sa;                     //数据库SA密码
          private $db_dbName;                //数据库名
          private $conn;                          //连接标识 'conn' 及 'pconn''
          private $result;                          //Query命令结果标识
          private $sql;                                //SQL语句
          private $row;                                //返回条目数
		  private $msdb;

          /* 构造函数 */
          public function __construct($db_host,$db_user,$db_sa,$db_dbName,$conn){
             $this->db_host=$db_host;
             $this->db_user=$db_user;
             $this->db_sa = $db_sa;
             $this->db_dbName=$db_dbName;
             $this->conn=$conn;
             $this->connect();
    }

    /* 数据库连接 */
    public function connect()
        {
                if($this->conn=="pconn"){  //永久链接

                    $this->conn=mssql_pconnect($this->db_host,$this->db_user,$this->db_sa);

                }else{                            //即时链接

                        $this->conn=mssql_connect($this->db_host,$this->db_user,$this->db_sa);

                }

                if(!mssql_select_db($this->db_dbName,$this->conn)){
							  $this->msdb=false;
                }else{
					$this->msdb=true;
				}
        }
		public function chkdb(){
			return $this->msdb;
		}

        /* 增|删|改|查 */
        public function query($sql)
        {
                if($sql == ""){

                  die("SQL ERROR:SQL IS NULL!");}
              $this->sql = $sql;

            $result = mssql_query($this->sql,$this->conn);

                if(!$result){  //调试用，sql语句出错时会自动打印出来

                  die("SQL：".$this->sql);

                }else{

                        $this->result = $result;

                }

            return $this->result;

        }

        //创建一个新数据库
        public function create_database($database_name){
                $database=$database_name;
                $sqlDatabase = 'create database '.$database;
                $this->query($sqlDatabase);
        }

        //获取记录集
        public function fetch_array()
        {
                return mssql_fetch_array($this->result);
        }

        //获取关联数组
        public function fetch_assoc()
        {
                return mssql_fetch_assoc($this->result);
        }

        //获取数字索引数组
        public function fetch_row()
        {
                return mssql_fetch_row($this->result);
        }

          //获取对象数组 调试:‘$row->content’
          public function fetch_Object()
        {
                return mssql_fetch_object($this->result);
        }

        //指向确定的一条数据记录
        public function db_data_seek($id){
                if($id>0){
                        $id=$id-1;
                }
                if(!@mssql_data_seek($this->result,$id)){
                        die('SQL ERROR:Specified data is null!');
                }
                return $this->result;
        }

        //根据查询结果集条目
        public function db_num_rows(){
                 if($this->result==null){
                                 die('SQL ERROR:Being empty, nothing!');
                 }else{
                         return  mssql_num_rows($this->result);
                 }
        }

        //返回最后一次写入查询影响的记录数
        public function db_affected_rows(){
                 return mssql_rows_affected();
        }

        //释放结果集
        public function free(){
                @mssql_free_result($this->result);
        }

        //数据库选择
        public function select_db($db_database){
                return mssql_select_db($db_database);
        }

        //获取结果的字段数
        public function num_fields($table_name){
                $this->query("select * from $table_name");
                echo $total = mssql_num_fields($this->result);
                echo "<pre>";
                for ($i=0; $i<$total; $i++){
                        print_r(mssql_fetch_field($this->result,$i) );
                }
                echo "</pre>";
                echo "<br />";
        }

        //初始化存储过程
        public function init_pro($proNme){
                return mssql_init($proNme,$this->conn);
        }


        //析构函数,关闭数据库,垃圾回收
        public function __destruct()
        {
                if(!empty($this->result)){
                        $this->free();
                }
                mssql_close($this->conn);
        }





  }

  
?>