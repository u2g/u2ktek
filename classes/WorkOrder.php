<?php
    class WorkOrder{
        //Attributs
        private $_phoneNumber;
        private $_customerName;
        private $_address;
        private $_jobCode;
        private $_contact;
        private $_workOrderNumber;
        private $_testBiq;
        private $_comments;
        private $_workOrderDate;
    
        //Accesseurs

        /**
         * Get the value of _phoneNumber
         */ 
        public function get_phoneNumber()
        {
                return $this->_phoneNumber;
        }

        /**
         * Set the value of _phoneNumber
         *
         * @return  self
         */ 
        public function set_phoneNumber($_phoneNumber)
        {
                $this->_phoneNumber = $_phoneNumber;

                return $this;
        }

        /**
         * Get the value of _customerName
         */ 
        public function get_customerName()
        {
                return $this->_customerName;
        }

        /**
         * Set the value of _customerName
         *
         * @return  self
         */ 
        public function set_customerName($_customerName)
        {
                $this->_customerName = $_customerName;

                return $this;
        }

        /**
         * Get the value of _address
         */ 
        public function get_address()
        {
                return $this->_address;
        }

        /**
         * Set the value of _address
         *
         * @return  self
         */ 
        public function set_address($_address)
        {
                $this->_address = $_address;

                return $this;
        }

        /**
         * Get the value of _jobCode
         */ 
        public function get_jobCode()
        {
                return $this->_jobCode;
        }

        /**
         * Set the value of _jobCode
         *
         * @return  self
         */ 
        public function set_jobCode($_jobCode)
        {
                $this->_jobCode = $_jobCode;

                return $this;
        }

        /**
         * Get the value of _contact
         */ 
        public function get_contact()
        {
                return $this->_contact;
        }

        /**
         * Set the value of _contact
         *
         * @return  self
         */ 
        public function set_contact($_contact)
        {
                $this->_contact = $_contact;

                return $this;
        }

        /**
         * Get the value of _workOrderNumber
         */ 
        public function get_workOrderNumber()
        {
                return $this->_workOrderNumber;
        }

        /**
         * Set the value of _workOrderNumber
         *
         * @return  self
         */ 
        public function set_workOrderNumber($_workOrderNumber)
        {
                $this->_workOrderNumber = $_workOrderNumber;

                return $this;
        }

        /**
         * Get the value of _testBiq
         */ 
        public function get_testBiq()
        {
                return $this->_testBiq;
        }

        /**
         * Set the value of _testBiq
         *
         * @return  self
         */ 
        public function set_testBiq($_testBiq)
        {
                $this->_testBiq = $_testBiq;

                return $this;
        }

        /**
         * Get the value of _comments
         */ 
        public function get_comments()
        {
                return $this->_comments;
        }

        /**
         * Set the value of _comments
         *
         * @return  self
         */ 
        public function set_comments($_comments)
        {
                $this->_comments = $_comments;

                return $this;
        }


        /**
         * Get the value of _workOrderDate
         */ 
        public function get_workOrderDate()
        {
                return $this->_workOrderDate;
        }

        /**
         * Set the value of _workOrderDate
         *
         * @return  self
         */ 
        public function set_workOrderDate($_workOrderDate)
        {
                $this->_workOrderDate = $_workOrderDate;

                return $this;
        }

        //Contructeur

        //Méthodes
        
    }
?>